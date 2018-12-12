<?php

namespace App\StudentResults;
include ("../../vendor/autoload.php");
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;
@session_start();
class StudentResults extends Dbconnect
{
    private $stdReg;
    private $name;
    private $email;
    private $dept;
    private $crs;
    private $grd;
    private $id;

    public function setData($data=""){
        if(!empty($data['stdRegs'])){
            $this->stdReg = $data['stdRegs'];
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
        if(!empty($data['grade'])){
            $this->grd = $data['grade'];
        }
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }

        return $this;
    }

    public function store()
    {
        try {
            $edo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO std_results(id, std_reg, name, email, department, course, grade_letter, created_at) VALUES(:myid,:reg,:n,:e,:d,:crs,:g,:cr)';
            $stmt = $edo->prepare($query);
            $data = [
                ':myid' => null,
                ':reg' => $this->stdReg,
                ':n' => $this->name,
                ':e' => $this->email,
                ':d' => $this->dept,
                ':crs' => $this->crs,
                ':g' => $this->grd,
                ':cr' => date('Y-m-d h:m:s'),
            ];
           /* Utility::dd($data);*/
            $status = $stmt->execute($data);

            if($status==1){
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:StudentResults.php');
            }else{
                $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                header('location:StudentResults.php');
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT std_results.id,std_results.std_reg,std_results.name,std_results.email,std_results.department,std_results.course,std_results.grade_letter,register_stds.regnum FROM std_results 
                  INNER JOIN register_stds ON std_results.std_reg = register_stds.id where std_results.id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function Pdf($id =''){
        $pdo = $this->pdo;
        $query = "SELECT std_results.std_reg,std_results.name,std_results.email,std_results.department,std_results.course,std_results.grade_letter,register_stds.regnum FROM std_results 
                INNER JOIN register_stds ON std_results.std_reg = register_stds.id where std_results.std_reg=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function update(){
        $pdo = new PDO('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE std_results SET std_reg=:reg,name=:n,email=:e,department=:d,course=:crs,grade_letter=:g,updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':reg' => $this->stdReg,
                ':n' => $this->name,
                ':e' => $this->email,
                ':d' => $this->dept,
                ':crs' => $this->crs,
                ':g' => $this->grd,
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
            header("location:ViewResults.php");
        }
    }


    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `std_results` where is_delete = 0';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }
/*INNER JOIN courses ON std_results.course = courses.id*/
    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT std_results.id,std_results.std_reg,std_results.name,std_results.email,std_results.department,std_results.course,std_results.grade_letter,register_stds.regnum FROM std_results 
                  INNER JOIN register_stds ON std_results.std_reg = register_stds.id
                
                   where std_results.is_delete = 0 ORDER BY id DESC ';
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
                $query="UPDATE std_results  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:ViewResults.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT std_results.id,std_results.std_reg,std_results.name,std_results.email,std_results.department,std_results.course,std_results.grade_letter,register_stds.regnum FROM std_results 
                  INNER JOIN register_stds ON std_results.std_reg = register_stds.id
                  where std_results.is_delete = 1  ORDER BY id DESC';
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
                $query="UPDATE std_results  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:ViewResults.php');
                }

            }
        }
    }


}