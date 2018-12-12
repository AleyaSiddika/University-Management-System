<?php
namespace App\RegisterStudents;
include ("../../vendor/autoload.php");
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;

@session_start();
class RegisterStudents extends Dbconnect
{
    private $name;
    private $email;
    private $cont;
    private $date;
    private $add;
    private $dept;
    private $id;
    private $regNum;

    public function setData($data=""){
        if(!empty($data['name'])){
            $this->name = $data['name'];
        }
        if(!empty($data['email'])){
            $this->email = $data['email'];
        }
        if(!empty($data['cont'])){
            $this->cont = $data['cont'];
        }
        if(!empty($data['date'])){
            $this->date = $data['date'];
        }
        if(!empty($data['add'])){
            $this->add = $data['add'];
        }
        if(!empty($data['dept'])){
            $this->dept = $data['dept'];
        }
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }
    /*    $edo = $this->pdo;
        $nRows = $edo->query('select * from register_stds')->rowCount();
        if($nRows<10){
            $this->regNum = $this->dept . "-" . date('Y') . "-" ."00". $nRows;
        }
        else if($nRows>=10 && $nRows<=99){
            $this->regNum = $this->dept . "-" . date('Y') . "-" ."0". $nRows;
        }
        else if($nRows>=100){
            $this->regNum = $this->dept . "-" . date('Y') . "-" . $nRows;
        }*/


        return $this;

    }

    public function store()
    {
        try {
            $cdo = new PDO('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO register_stds(id,name,email,contact,date,address, department,regnum, created_at) VALUES(:myid,:n,:e,:con,:d,:add,:department,:rn,:cr)';
            $stmt = $cdo->prepare($query);
            if(!empty($this->dept)) {

                $numRows = $this->pdo->query("select * from register_stds
                where department='$this->dept'")->rowCount();
                $nRows = $numRows + 1;
                if ($nRows < 10) {
                    $this->regNum = $this->dept . "-" . date('Y') . "-" . "00" . $nRows;
                } else if ($nRows >= 10 && $nRows <= 99) {
                    $this->regNum = $this->dept . "-" . date('Y') . "-" . "0" . $nRows;
                } else if ($nRows >= 100) {
                    $this->regNum = $this->dept . "-" . date('Y') . "-" . $nRows;
                }
            }

            $data = [
                ':myid' => null,
                ':n' => $this->name,
                ':e' => $this->email,
                ':con' => $this->cont,
                ':d' => $this->date,
                ':add' => $this->add,
                ':department' => $this->dept,
                ':rn' => $this->regNum,
                ':cr' => date('Y-m-d h:m:s'),
            ];

           // $status = $stmt->execute($data);
            $status =0;
            if (!empty($this->email)) {
                $codeExistance = trim($this->email);


                $codeQuery = "SELECT * FROM register_stds WHERE email = '$codeExistance' LIMIT 1";
                $stmt2 = $cdo->prepare($codeQuery);
                $stmt2->execute();
                $emailFound = $stmt2->fetch();
                if ($emailFound != false) {
                    //echo "This Code Already Exist! Please input another Code.";
                }

            }



            if(!empty($this->email)&& $emailFound == false)
            {
                $status=  $stmt->execute($data);
            }

            if($status==1){
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:RegisterStds.php');
            }else{
                if ($emailFound != false) {
                $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Email Already Exist! Please input another Email.
                            </div>";
                header('location:RegisterStds.php');
            }
            else {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                    header('location:RegisterStds.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }



    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT * FROM `register_stds` where id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo = new PDO('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE register_stds SET name=:n,email=:e,contact=:con,date=:d,address=:add,department=:department,updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':n' => $this->name,
                ':e' => $this->email,
                ':con' => $this->cont,
                ':d' => $this->date,
                ':add' => $this->add,
                ':department' => $this->dept,
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
            header("location:showRegStd.php");
        }
        else{
            $_SESSION['Msg'] =
                "<div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'>
                    Data Update Unsuccessfully
                </div>";
            header("location:showRegStd.php");
        }
    }


    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `register_stds` where is_delete = 0   ORDER BY id DESC';
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
                $query="UPDATE register_stds  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showRegStd.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'select * from `register_stds` where is_delete = 1   ORDER BY id DESC';
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
                $query="UPDATE register_stds  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showRegStd.php');
                }

            }
        }
    }


}