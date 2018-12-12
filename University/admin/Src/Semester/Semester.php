<?php

namespace App\Semester;
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;
@session_start();
class Semester extends Dbconnect
{
    private $seme;
    private $id;

    public function setData($data=""){
        if(!empty($data['seme'])){
            $this->seme = $data['seme'];
        }
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }

        return $this;
    }

    public function store()
    {
        try {
            $pdo =  new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO semesters(id,semester,created_at) VALUES(:myid, :seme, :cr)';
            $stmt = $pdo->prepare($query);
            $data = [
                ':myid' => null,
                ':seme' => $this->seme,
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
                header('location:semesters.php');
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
                    header('location:semesters.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getAllData()
    {
        $pdo = $this->pdo;
        $query = 'select * from `semesters`';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT * FROM `semesters` where id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE semesters  SET semester=:seme, updated_at=:u WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':seme' => $this->seme,
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
            header("location:semesters.php");
        }

    }


    public  function delete($id=''){
        $pdo = $this->pdo;
        $query = "Delete FROM `semesters` where id=$id";
        $stmt = $pdo->prepare($query);
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
            header("location:semesters.php");
        }
    }

}