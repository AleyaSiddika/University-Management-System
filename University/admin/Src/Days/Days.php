<?php
namespace App\Days;
use App\Utility\Utility;
use App\Dbconnect\Dbconnect;
use pdo;
@session_start();
class Days extends Dbconnect
{
    private $day;
    private $id;

    public function setData($data=""){
        if(!empty($data['day'])){
            $this->day = $data['day'];
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
            $query = 'INSERT INTO days(id,day,created_at) VALUES(:myid, :d, :cr)';
            $stmt = $pdo->prepare($query);
            $data = [
                ':myid' => null,
                ':d' => $this->day,
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
                header('location:days.php');
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
                    header('location:days.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getAllData()
    {
        $pdo = $this->pdo;
        $query = 'select * from `days`';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT * FROM `days` where id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo =  new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE days  SET day=:day, updated_at=:u WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':day' => $this->day,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id,
            )
        );
        if($status){
            $_SESSION['Msg'] =
                "<div style=' border-radius: 3px; 
                            box-shadow: 1px 3px 8px #999; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Update Successfully
                </div>";
            header("location:days.php");
        }

    }


    public  function delete($id=''){
        $pdo = $this->pdo;
        $query = "Delete FROM `days` where id=$id";
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
            header("location:days.php");
        }
    }

}