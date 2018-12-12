<?php

namespace App\EnrollCourses;
include ("../../vendor/autoload.php");
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;
@session_start();
class EnrollCourses extends Dbconnect
{
    private $reg;
    private $name;
    private $email;
    private $dept;
    private $crs;
    private $date;
    private $id;

    public function setData($data=""){
        if(!empty($data['stdReg'])){
            $this->reg = $data['stdReg'];
        }
        if(!empty($data['name'])){
            $this->name = $data['name'];
        }
        if(!empty($data['email'])){
            $this->email = $data['email'];
        }
        if(!empty($data['dept'])){
            $this->dept = $data['dept'];
        }
        if(!empty($data['course'])){
            $this->crs = $data['course'];
        }
        if(!empty($data['date'])){
            $this->date = $data['date'];
        }
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }

        return $this;
    }

    public function store()
    {
        try {
            $cdo =  new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO enroll_courses(id, std_reg, name, email, department, course, date, created_at) VALUES(:myid,:reg,:n,:e,:d,:crs,:date,:cr)';
            $stmt = $cdo->prepare($query);
            $data = [
                ':myid' => null,
                ':reg' => $this->reg,
                ':n' => $this->name,
                ':e' => $this->email,
                ':d' => $this->dept,
                ':crs' => $this->crs,
                ':date' => $this->date,
                ':cr' => date('Y-m-d h:m:s'),
            ];
            /*Utility::dd($data);*/
            $status = $stmt->execute($data);

            if($status==1){
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:EnrollCourses.php');
            }else{
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                header('location:EnrollCourses.php');
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function show($id='')
    {
        $pdo = $this->pdo;
        $query = "SELECT enroll_courses.id,enroll_courses.std_reg,enroll_courses.name,enroll_courses.email,enroll_courses.department,enroll_courses.course,enroll_courses.date,register_stds.regnum FROM enroll_courses 
                  INNER JOIN register_stds ON enroll_courses.std_reg = register_stds.id where enroll_courses.id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo = $this->pdo;
        $query = 'UPDATE enroll_courses SET std_reg=:reg, name=:n, email=:e, department=:d, course=:crs, date=:date, updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':reg' => $this->reg,
                ':n' => $this->name,
                ':e' => $this->email,
                ':d' => $this->dept,
                ':crs' => $this->crs,
                ':date' => $this->date,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id
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
            header("location:showCourses.php");
        }
    }

    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `enroll_courses` where is_delete = 0';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT enroll_courses.id,enroll_courses.std_reg,enroll_courses.name,enroll_courses.email,enroll_courses.department,enroll_courses.course,enroll_courses.date,register_stds.regnum FROM enroll_courses 
                  INNER JOIN register_stds ON enroll_courses.std_reg = register_stds.id where enroll_courses.is_delete = 0  ORDER BY  id DESC ';
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
                $query="UPDATE enroll_courses  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showCourses.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT enroll_courses.id,enroll_courses.std_reg,enroll_courses.name,enroll_courses.email,enroll_courses.department,enroll_courses.course,enroll_courses.date,register_stds.regnum FROM enroll_courses 
                  INNER JOIN register_stds ON enroll_courses.std_reg = register_stds.id where enroll_courses.is_delete = 1  ORDER BY  id DESC ';
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
                $query="UPDATE enroll_courses  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showCourses.php');
                }

            }
        }
    }



}