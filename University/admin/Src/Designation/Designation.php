<?php

namespace App\Designation;
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;
@session_start();
class Designation extends Dbconnect
{

    private $des;
    private $id;

    public function setData($data=""){
        if(!empty($data['des'])){
            $this->des = $data['des'];
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
            $query = 'INSERT INTO designations(id,designation,created_at) VALUES(:myid, :des, :cr)';
            $stmt = $cdo->prepare($query);
            $data = [
                ':myid' => null,
                ':des' => $this->des,
                ':cr' => date('Y-m-d h:m:s'),
            ];
            $status = $stmt->execute($data);
            if($status==1){
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            box-shadow: 1px 3px 8px #999; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Insert Successfully
                </div>";
                header('location:designations.php');
            }else{
                if($status == 0) {
                    $_SESSION['Msg'] =
                        "<div style=' border-radius: 3px; 
                            box-shadow: 1px 3px 8px #999; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Insert Unsuccessfully
                </div>";
                    header('location:designations.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getAllData()
    {
        $cdo = $this->pdo;
        $query = 'select * from `designations`';
        $stmt = $cdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function show($id=''){
        $cdo = $this->pdo;
        $query = "SELECT * FROM `designations` where id=$id";
        $stmt = $cdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $cdo =  new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE designations  SET designation=:des, updated_at=:u WHERE id=:id';
        $stmt = $cdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':des' => $this->des,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id,
            )
        );
        if($status){
            /*$msg = "<h1>Data Inserted </h1>";*/
            $_SESSION['Msg'] =
                "<div style=' border-radius: 3px; 
                            box-shadow: 1px 3px 8px #999; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Update Successfully
                </div>";
            header("location:designations.php");
        }

    }


    public  function delete($id=''){
        $cdo = $this->pdo;
        $query = "Delete FROM `designations` where id=$id";
        $stmt = $cdo->prepare($query);
        $status = $stmt->execute();
        if($status){
            $_SESSION['Msg'] =
                "<div style=' border-radius: 3px; 
                            box-shadow: 1px 3px 8px #999; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'>
                    Data Delete Successfully
                </div>";
            header("location:designations.php");
        }
    }

}