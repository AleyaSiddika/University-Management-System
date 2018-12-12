<?php
namespace App\Teachers;
include ("../../vendor/autoload.php");
use App\Dbconnect\Dbconnect;
use App\Utility\Utility;
use pdo;

@session_start();
class Teachers extends Dbconnect
{
    private $name;
    private $add;
    private $email;
    private $contact;
    private $des;
    private $dept;
    private $crTaken;
    private $id;

    public function setData($data=""){
        if(!empty($data['name'])){
            $this->name = $data['name'];
        }
        if(!empty($data['address'])){
            $this->add = $data['address'];
        }
        if(!empty($data['email'])){
            $this->email = $data['email'];
        }
        if(!empty($data['cont'])){
            $this->contact = $data['cont'];
        }
        if(!empty($data['des'])){
            $this->des = $data['des'];
        }
        if(!empty($data['dept'])){
            $this->dept = $data['dept'];
        }
        if(!empty($data['credittaken'])){
            $this->crTaken = $data['credittaken'];
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
            $query = 'INSERT INTO teachers(id, t_name, address, email, contact, designation, department, credittaken,remain, created_at) VALUES(:myid,:n,:add,:e,:con,:des,:department,:crt,:rm,:cr)';
            $stmt = $pdo->prepare($query);
            $data = [
                ':myid' => null,
                ':n' => $this->name,
                ':add' => $this->add,
                ':e' => $this->email,
                ':con' => $this->contact,
                ':des' => $this->des,
                ':department' => $this->dept,
                ':crt' => $this->crTaken,
                ':rm' => $this->crTaken,
                ':cr' => date('Y-m-d h:m:s'),
            ];
           // $status = $stmt->execute($data);
            $status =0;
            if (!empty($this->email)) {
                $codeExistance = trim($this->email);


                $codeQuery = "SELECT * FROM teachers WHERE email = '$codeExistance' LIMIT 1";
                $stmt2 = $pdo->prepare($codeQuery);
                $stmt2->execute();
                $emailFound = $stmt2->fetch();
                if ($emailFound != false) {

                }

            }

            if(!empty($this->email)&& $emailFound == false)
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
                header('location:addTeachers.php');
            }else{
                if ($emailFound != false) {
                $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Email Already Exist! Please input another Email.
                            </div>";
                header('location:addTeachers.php');
            }
            else {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                    header('location:addTeachers.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT teachers.id,teachers.t_name,teachers.address,teachers.email,teachers.contact,teachers.designation,teachers.department,teachers.credittaken,teachers.remain,departments.name
                  FROM teachers INNER JOIN departments ON teachers.department = departments.id where teachers.id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE teachers SET t_name=:n,address=:add,email=:e,contact=:con,designation=:des,department=:department,credittaken=:crt,updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':n' => $this->name,
                ':add' => $this->add,
                ':e' => $this->email,
                ':con' => $this->contact,
                ':des' => $this->des,
                ':department' => $this->dept,
                ':crt' => $this->crTaken,
                ':u' => date('Y-m-d h:m:s'),
                ':id' => $this->id,
            )
        );
        if($status){
            $_SESSION['Msg'] = "
              <div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Update Successfully
                            </div>";
            header("location:showTeachers.php");
        }
    }



    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT teachers.id,teachers.t_name,teachers.address,teachers.email,teachers.contact,teachers.designation,teachers.department,teachers.credittaken,teachers.remain,departments.name
                  FROM teachers INNER JOIN departments ON teachers.department = departments.id where teachers.is_delete = 0  ORDER BY id DESC ';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }


    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `teachers` where is_delete = 0';
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
                $query="UPDATE teachers  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showTeachers.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT teachers.id,teachers.t_name,teachers.address,teachers.email,teachers.contact,teachers.designation,teachers.department,teachers.credittaken,teachers.remain,departments.name
                  FROM teachers INNER JOIN departments ON teachers.department = departments.id where teachers.is_delete = 1 ORDER BY id DESC';
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
                $query="UPDATE teachers  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showTeachers.php');
                }

            }
        }
    }



}