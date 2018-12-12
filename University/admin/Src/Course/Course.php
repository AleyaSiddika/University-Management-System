<?php
namespace App\Course;
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Dbconnect\Dbconnect;
use pdo;
@session_start();
class Course extends Dbconnect
{
    private $code;
    private $name;
    private $credit;
    private $desc;
    private $dept;
    private $seme;
    private $id;

    public function setData($data=""){
            if (!empty($data['code'])) {
                $this->code = $data['code'];
            }
            if (!empty($data['name'])) {
                $this->name = $data['name'];
            }
            if (!empty($data['credit'])) {
                $this->credit = $data['credit'];
            }
            if (!empty($data['desc'])) {
                $this->desc = $data['desc'];
            }
            if (!empty($data['dept'])) {
                $this->dept = $data['dept'];
            }
            if (!empty($data['seme'])) {
                $this->seme = $data['seme'];
            }
            if (!empty($data['id'])) {
                $this->id = $data['id'];
            }

            return $this;
        }


    public function store()
    {
        try {
            $db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO courses(id,code,c_name,credit,description,department,semester,created_at) VALUES(:myid,:c,:n,:credit,:des,:department,:sem,:cr)';
            $stmt = $db->prepare($query);
            $data = [
                ':myid' => null,
                ':c' => $this->code,
                ':n' => $this->name,
                ':credit' => $this->credit,
                ':des' => $this->desc,
                ':department' => $this->dept,
                ':sem' => $this->seme,
                ':cr' => date('Y-m-d h:m:s'),
            ];
            //$status = $stmt->execute($data);
            $status =0;
            if (!empty($this->code)) {
                $codeExistance = trim($this->code);

                $codeQuery = "SELECT * FROM courses WHERE code = '$codeExistance' LIMIT 1";
                $stmt2 = $db->prepare($codeQuery);
                $stmt2->execute();
                $codeFound = $stmt2->fetch();
                if ($codeFound != false) {
                    //echo "This Code Already Exist! Please input another Code.";
                }

            }
            if (!empty($this->name)) {
                $codeExistance2 = trim($this->name);


                $codeQuery2 = "SELECT * FROM courses WHERE name = '$codeExistance2' LIMIT 1";
                $stmt3 = $db->prepare($codeQuery2);
                $stmt3->execute();
                $nameFound = $stmt3->fetch();
                if ($nameFound != false) {
                    //echo "This Code Already Exist! Please input another Code.";
                }

            }
            if(!empty($this->code)&& !empty($this->name) && $codeFound == false && $nameFound == false)
            {
                $status=  $stmt->execute($data);
            }
            if($status==1){
                $_SESSION['Msg'] = "
                <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:course.php');
            }else{
                if ($codeFound && $nameFound != false ) {
                    $_SESSION['Msg'] = "
                                <div style=' border-radius: 3px; 
                                font-size: 14px; 
                                background-color:#ffd5d3 ; 
                                color:#f00;'> 
                                        This Name And Code Already Exist!
                                </div>";
                    header('location:course.php');
                }
                elseif ($codeFound != false) {
                    //echo "This Code Already Exist! Please input another Code.";
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Code Already Exist! Please input another Code.
                            </div>";
                    header('location:course.php');
                }
                elseif ($nameFound != false) {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Name Already Exist! Please input another Name.
                            </div>";
                    header('location:course.php');
                }
                else {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                    header('location:course.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function show($id=''){
        $db = $this->pdo;
        $query = "SELECT courses.id,courses.code,courses.c_name,courses.credit,courses.description,courses.department,courses.semester,departments.name
                  FROM courses INNER JOIN departments ON courses.department = departments.id where courses.id=$id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE courses SET code=:c,c_name=:n,credit=:credit,description=:des,department=:department,semester=:sem,updated_at=:u  WHERE id=:id';
        $stmt = $db->prepare($query);
        $status = $stmt->execute(
            array(
                ':c' => $this->code,
                ':n' => $this->name,
                ':credit' => $this->credit,
                ':des' => $this->desc,
                ':department' => $this->dept,
                ':sem' => $this->seme,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id,
            )
        );
        if($status){
            $_SESSION['Msg'] =
                "<div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Update Successfully
                </div>";
            header("location:showCourse.php");
        }

    }

    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT courses.id,courses.code,courses.c_name,courses.credit,courses.description,courses.department,courses.semester,departments.name
                  FROM courses INNER JOIN departments ON courses.department = departments.id where courses.is_delete = 0 order by id DESC';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }


    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `courses` where is_delete = 0';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
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
                $query="UPDATE courses  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showCourse.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT courses.id,courses.code,courses.c_name,courses.credit,courses.description,courses.department,courses.semester,departments.name
                  FROM courses INNER JOIN departments ON courses.department = departments.id where courses.is_delete = 1 order by id DESC';
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
                $query="UPDATE courses  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showCourse.php');
                }

            }
        }
    }


}