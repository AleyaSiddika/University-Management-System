<?php

namespace App\CourseAssignTeacher;
include ("../../vendor/autoload.php");
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;
@session_start();

class CourseAssignTeacher extends Dbconnect
{
    private $dept;
    private $tea;
    private $ctbt;
    private $remCredit;
    private $CrCode;
    private $name;
    private $credit;
    private $id;

    public function setData($data=""){
        if(!empty($data['dept'])){
            $this->dept = $data['dept'];
        }
        if(!empty($data['teacher'])){
            $this->tea = $data['teacher'];
        }
        if(!empty($data['ctbt'])){
            $this->ctbt = $data['ctbt'];
        }
        if(!empty($data['RemCredit'])){
            $this->remCredit = $data['RemCredit'];
        }
        if(!empty($data['courseCD'])){
            $this->CrCode = $data['courseCD'];
        }
        if(!empty($data['name'])){
            $this->name = $data['name'];
        }
        if(!empty($data['credit'])){
            $this->credit = $data['credit'];
        }
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }

        return $this;
    }



    public function store()
    {
        try { /* new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');*/
            $pdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO assign_teachers(id, department, teacher, credit_taken, remain_credit, course_code, crs_name, credit, created_at) VALUES(:myid,:d,:t,:ct,:rc,:cc,:n,:crt,:cr)';
            $stmt = $pdo->prepare($query);
            $status = 0;


            if (!empty($this->name)) {
                $codeExistance = trim($this->name);


                $codeQuery = "SELECT * FROM assign_teachers WHERE crs_name = '$codeExistance' LIMIT 1";
                $stmt2 = $pdo->prepare($codeQuery);
                $stmt2->execute();
                $courseFound = $stmt2->fetch();
                if ($courseFound != false) {
                    //echo "This Code Already Exist! Please input another Code.";
                }

            }
            if (!empty($this->tea)) {
                $codeExistance2 = trim($this->tea);



                if (!empty($this->remCredit)) {
                    //$codeExistance3 = trim($this->day);


                    $codeQuery3 = "SELECT remain FROM teachers WHERE id = '$codeExistance2' LIMIT 1";
                    $stmt3 = $pdo->prepare($codeQuery3);
                    $stmt3->execute();
                    $remFound = $stmt3->fetch();
                    $remFound2 = $remFound['remain'];
                    $this->remCredit= $remFound2 - $this->credit;



//                        $codeQuery4 = "UPDATE teachers SET remain=:rc,updated_at=:u  WHERE id='$codeExistance2'";
//
//                        $stmt4 = $pdo->prepare($codeQuery4);
//
//                        $status = $stmt4->execute(
//                            array(
//
//                                ':rc' => $this->remCredit,
//
//                                ':u' => date('Y-m-d h:m:s'),
//
//                            )
//                        );



//                            echo "<pre>";
//        print_r($remFound2);
//        die();


                }



            }

            $data = [
                ':myid' => null,
                ':d' => $this->dept,
                ':t' => $this->tea,
                ':ct' => $this->ctbt,
                ':rc' => $this->remCredit,
                ':cc' => $this->CrCode,
                ':n' => $this->name,
                ':crt' => $this->credit,
                ':cr' => date('Y-m-d h:m:s'),
            ];
            if(!empty($this->remCredit) && $courseFound == false)
            {

                $status = $stmt->execute($data);
                $codeQuery4 = "UPDATE teachers SET remain=:rc,updated_at=:u  WHERE id='$codeExistance2'";

                $stmt4 = $pdo->prepare($codeQuery4);

                 $stmt4->execute(
                    array(

                        ':rc' => $this->remCredit,

                        ':u' => date('Y-m-d h:m:s'),

                    )
                );

            }
//            Utility::dd($data);
            //$status = $stmt->execute($data);
            if($status==1){
                $_SESSION['Msg'] = "
                 <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:addAssignTeachers.php');
            }else {
                if ($courseFound != false) {
                    $_SESSION['Msg'] = "
                      <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Course Already Exist Another Teacher!
                            </div>";
                    header('location:addAssignTeachers.php');
                } else {
                    $_SESSION['Msg'] = "
                      <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                    header('location:addAssignTeachers.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function show($id=''){
        $pdo =  $this->pdo;
        $query = "SELECT assign_teachers.id,assign_teachers.department,assign_teachers.teacher,assign_teachers.credit_taken,assign_teachers.remain_credit,assign_teachers.course_code,assign_teachers.crs_name,assign_teachers.credit,departments.name,courses.code,teachers.t_name FROM assign_teachers 
                  INNER JOIN departments ON assign_teachers.department = departments.id 
                  INNER JOIN courses ON assign_teachers.course_code = courses.id 
                  INNER JOIN teachers ON assign_teachers.teacher = teachers.id where assign_teachers.id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update()
    {
        $pdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE assign_teachers SET department=:d,teacher=:t,credit_taken=:ct,remain_credit=:rc,course_code=:cc,crs_name=:n,credit=:crt,updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':d' => $this->dept,
                ':t' => $this->tea,
                ':ct' => $this->ctbt,
                ':rc' => $this->remCredit,
                ':cc' => $this->CrCode,
                ':n' => $this->name,
                ':crt' => $this->credit,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id,
            )
        );
        if ($status) {
            $_SESSION['Msg'] = "
             <div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Update Successfully
                            </div>";
            header("location:ShowAssTeachers.php");
        }
    }

    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `assign_teachers` where is_delete = 0';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }


    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT assign_teachers.id,assign_teachers.department,assign_teachers.teacher,assign_teachers.credit_taken,assign_teachers.remain_credit,assign_teachers.course_code,assign_teachers.crs_name,assign_teachers.credit,departments.name,courses.code,teachers.t_name FROM assign_teachers 
                  INNER JOIN departments ON assign_teachers.department = departments.id 
                  INNER JOIN courses ON assign_teachers.course_code = courses.id 
                  INNER JOIN teachers ON assign_teachers.teacher = teachers.id where assign_teachers.is_delete = 0 ORDER BY id DESC ';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function deleteAllData(){
        $db = $this->pdo;
        $query = "Delete FROM `assign_teachers` ";
        $stmt = $db->prepare($query);
        $status = $stmt->execute();
        if($status){
            $_SESSION['Msg']  =
                "<div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#ef3b70 ; 
                            color:#fff;'> 
                    All Courses Unassign
                </div>";
            header("location:UnassignCourse.php");
        }
    }


    public  function deleteAll()
    {
        if(isset($_POST['delete']))
        {
            $db = $this->pdo;
            $cnt=array();

            $cnt=count($_POST['chkbox']);
            for($i=0;$i<$cnt;$i++)
            {
                $del_id=$_POST['chkbox'][$i];
                $query="UPDATE assign_teachers  SET is_delete=:up WHERE id=$del_id";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':up' => 1
                    )
                );
                if(!empty($status)){
                    $_SESSION['Msg']  =
                        "<div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#ef3b70 ; 
                            color:#fff;'> 
                    Data Delete Successfully
                </div>";
                    header('location:ShowAssTeachers.php');
                }

            }
        }
    }


    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT assign_teachers.id,assign_teachers.department,assign_teachers.teacher,assign_teachers.credit_taken,assign_teachers.remain_credit,assign_teachers.course_code,assign_teachers.crs_name,assign_teachers.credit,departments.name,courses.code,teachers.t_name FROM assign_teachers 
                  INNER JOIN departments ON assign_teachers.department = departments.id 
                  INNER JOIN courses ON assign_teachers.course_code = courses.id 
                  INNER JOIN teachers ON assign_teachers.teacher = teachers.id where assign_teachers.is_delete = 1  ORDER BY id DESC';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public  function UndoDelete()
    {
        if(isset($_POST['delete']))
        {
            $db = $this->pdo;
            $cnt=array();

            $cnt=count($_POST['chkbox']);
            for($i=0;$i<$cnt;$i++)
            {
                $del_id=$_POST['chkbox'][$i];
                $query="UPDATE assign_teachers  SET is_delete=:up WHERE id=$del_id";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':up' => 0
                    )
                );
                if(!empty($status)){
                    /*echo "<script type='text/javascript'>alert('Are you sure delete data!')</script>";*/
                    $_SESSION['Msg']  =
                        "<div style=' border-radius: 3px;   
                            font-size: 18px; 
                           background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Store Successfully
                </div>";
                    header('location:ShowAssTeachers.php');
                }

            }
        }
    }




}