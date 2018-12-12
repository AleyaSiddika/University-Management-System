<?php

namespace App\Department;
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Dbconnect\Dbconnect;
use PDO;
@session_start();
class Department extends Dbconnect
{
    private $code;
    private $name;
    private $id;

    public function setData($data="")
    {
            if (!empty($data['code'])) {
                $this->code = $data['code'];
            }
            if (!empty($data['name'])) {
                $this->name = $data['name'];
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
            $query = 'INSERT INTO departments(id,code,name,created_at) VALUES(:myid, :c, :n, :cr)';
            $stmt = $db->prepare($query);
            $data = [
                ':myid' => null,
                ':c' => $this->code,
                ':n' => $this->name,
                ':cr' => date('Y-m-d h:m:s'),
            ];
           // $status = $stmt->execute($data);
            // $status = $stmt->execute($data);


            $status =0;
                if (!empty($this->code)) {
                    $codeExistance = trim($this->code);


                    $codeQuery = "SELECT * FROM departments WHERE code = '$codeExistance' LIMIT 1";
                    $stmt2 = $db->prepare($codeQuery);
                    $stmt2->execute();
                    $codeFound = $stmt2->fetch();
                    if ($codeFound != false) {
                        //echo "This Code Already Exist! Please input another Code.";
                    }

                }
                if (!empty($this->name)) {
                    $codeExistance2 = trim($this->name);


                    $codeQuery2 = "SELECT * FROM departments WHERE name = '$codeExistance2' LIMIT 1";
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

            if($status==1){  /*#ffbab5 (red color)*/
               $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";

                header('location:department.php');
            }
            else {
                if ($codeFound && $nameFound != false ) {
                    $_SESSION['Msg'] = "
                                <div style=' border-radius: 3px; 
                                font-size: 14px; 
                                background-color:#ffd5d3 ; 
                                color:#f00;'> 
                                        This Name And Code Already Exist!
                                </div>";
                    header('location:department.php');
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
                    header('location:department.php');
                }
                elseif ($nameFound != false) {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Name Already Exist! Please input another Name.
                            </div>";
                    header('location:department.php');
                }
                else {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data Insert Unsuccessfully
                            </div>";
                    header('location:department.php');
                }
            }

        } catch (PDOException $e) {
        }
    }

    public function show($id=''){
        $db = $this->pdo;
        $query = "SELECT * FROM `departments` where id=$id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `departments` where is_delete = 0 order by id DESC';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function update(){
        $db =  new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE departments  SET code=:c, name=:n, updated_at=:u WHERE id=:id';
        $stmt = $db->prepare($query);
        $status = $stmt->execute(
            array(
                ':c' => $this->code,
                ':n' => $this->name,
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
            header("location:showDept.php");
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
                $query="UPDATE departments  SET is_delete=:up WHERE id=$del_id";
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
                        header('location:showDept.php');
                    }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'select * from `departments` where is_delete = 1 order by id DESC';
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
                $query="UPDATE departments  SET is_delete=:up WHERE id=$del_id";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':up' => 0
                    )
                );
                if(!empty($status)){
                    $_SESSION['Msg']  =
                        "<div style=' border-radius: 3px;   
                            font-size: 18px; 
                           background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Store Successfully
                </div>";
                    header('location:showDept.php');
                }

            }
        }
    }

}