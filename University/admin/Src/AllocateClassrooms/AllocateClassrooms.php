<?php

namespace App\AllocateClassrooms;
include('../../vendor/autoload.php');
use App\Dbconnect\Dbconnect;
use PDO;
@session_start();

class AllocateClassrooms extends Dbconnect
{
    private $dept;
    private $course;
    private $room;
    private $day;
    private $form;
    private $Tto;
    private $id;



    public function setData($data=""){
        if(!empty($data['dept'])){
            $this->dept = $data['dept'];
        }
        if(!empty($data['course'])){
            $this->course = $data['course'];
        }
        if(!empty($data['room'])){
            $this->room = $data['room'];
        }
        if(!empty($data['day'])){
            $this->day = $data['day'];
        }
        if(!empty($data['form'])){
            $this->form = $data['form'];
        }

        if(!empty($data['timeTo'])){
            $this->Tto = $data['timeTo'];
        }


        if(!empty($data['id'])){
            $this->id = $data['id'];
        }
//       // $this->ns = $this->form+"00:01:00";
//        echo "<pre>";
//        print_r($data);
//        die();

        return $this;
    }

    public function store()
    {
        try {
            $cdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
            $query = 'INSERT INTO classrooms_allocate(id, department, course, room, days,start_time,end_time, created_at) VALUES(:myid,:dept,:crs,:r,:d,:st,:et,:cr)';
            $stmt = $cdo->prepare($query);
            $data = [
                ':myid' => null,
                ':dept' => $this->dept,
                ':crs' => $this->course,
                ':r' => $this->room,
                ':d' => $this->day,
                ':st' => $this->form,
                ':et' => $this->Tto,
                ':cr' => date('Y-m-d h:m:s'),
            ];

            $status = 0;
            if (!empty($this->room)) {
                $codeExistance2 = trim($this->room);



                if (!empty($this->day)) {
                    $codeExistance3 = trim($this->day);


                    $codeQuery3 = "SELECT * FROM  classrooms_allocate WHERE 
                         start_time BETWEEN '$this->form' AND '$this->Tto'
                              OR end_time BETWEEN '$this->form' AND '$this->Tto' AND room = '$codeExistance2' AND days='$codeExistance3' ";
                    $stmt3 = $cdo->prepare($codeQuery3);
                    $stmt3->execute();
                    $dayFound = $stmt3->fetch();
//                            echo "<pre>";
//        print_r($dayFound);
//        die();

                    if ($dayFound != false) {
                        //echo "This Code Already Exist! Please input another Code.";
                    }

                }



            }
            if(!empty($this->room)&& !empty($this->day) &&  $dayFound == false)
            {

                $status = $stmt->execute($data);

            }
           //$status = $stmt->execute($data);
            if($status==1){
                $_SESSION['Msg'] =
                    "<div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#c3f1c5 ; 
                            color:#3b7f4a;'> 
                                    Data Insert Successfully
                            </div>";
                header('location:AddAllocateRooms.php');
            }else{
                if ($dayFound != false) {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Error! This Time Already Booking Another Class! Please input another Time.
                            </div>";
                    header('location:AddAllocateRooms.php');
                }
                else {
                    $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    Data insert Unsuccessfully
                            </div>";
                    header('location:AddAllocateRooms.php');
                }
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function show($id=''){
        $pdo = $this->pdo;
        $query = "SELECT classrooms_allocate.id,classrooms_allocate.department,classrooms_allocate.course,classrooms_allocate.room,classrooms_allocate.days,classrooms_allocate.start_time,classrooms_allocate.end_time,departments.name,courses.c_name FROM classrooms_allocate 
                  INNER JOIN departments ON classrooms_allocate.department = departments.id 
                  INNER JOIN courses ON classrooms_allocate.course = courses.id where classrooms_allocate.id=$id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetch();
        return $allData;
    }

    public function update(){
        $pdo = new PDO ('mysql:host =localhost; dbname=uvmanagement', 'root', '');
        $query = 'UPDATE classrooms_allocate SET department=:dept,course=:crs,room=:r,days=:d,start_time=:st,end_time=:et,updated_at=:u  WHERE id=:id';
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute(
            array(
                ':dept' => $this->dept,
                ':crs' => $this->course,
                ':r' => $this->room,
                ':d' => $this->day,
                ':st' => $this->form,
                ':et' => $this->Tto,
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
            header("location:showAlloRooms.php");
        }
    }

    public function deleteAllData(){
        $db = $this->pdo;
        $query = "Delete FROM `classrooms_allocate` ";
        $stmt = $db->prepare($query);
        $status = $stmt->execute();
        if($status){
            $_SESSION['Msg']  =
                "<div style=' border-radius: 3px; 
                            font-size: 18px; 
                            background-color:#ef3b70 ; 
                            color:#fff;'> 
                    All Classrooms Unallocate
                </div>";
            header("location:UnallocateClass.php");
        }
    }

    public function getAllData()
    {
        $db = $this->pdo;
        $query = 'select * from `classrooms_allocate` where is_delete = 0';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $allData = $stmt->fetchAll();
        return $allData;
    }

    public function getData()
    {
        $db = $this->pdo;
        $query = 'SELECT classrooms_allocate.id,classrooms_allocate.department,classrooms_allocate.course,classrooms_allocate.room,classrooms_allocate.days,classrooms_allocate.start_time,classrooms_allocate.end_time,departments.name,courses.c_name FROM classrooms_allocate 
                  INNER JOIN departments ON classrooms_allocate.department = departments.id 
                  INNER JOIN courses ON classrooms_allocate.course = courses.id where classrooms_allocate.is_delete = 0 ORDER BY  id DESC ' ;
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
                $query="UPDATE classrooms_allocate  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showAlloRooms.php');
                }

            }
        }
    }




    public function getAllDeleteData()
    {
        $db = $this->pdo;
        $query = 'SELECT classrooms_allocate.id,classrooms_allocate.department,classrooms_allocate.course,classrooms_allocate.room,classrooms_allocate.days,classrooms_allocate.start_time,classrooms_allocate.end_time,departments.name,courses.c_name FROM classrooms_allocate 
                  INNER JOIN departments ON classrooms_allocate.department = departments.id 
                  INNER JOIN courses ON classrooms_allocate.course = courses.id where classrooms_allocate.is_delete = 1 ORDER BY  id DESC ';
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
                $query="UPDATE classrooms_allocate  SET is_delete=:up WHERE id=$del_id";
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
                    header('location:showAlloRooms.php');
                }

            }
        }
    }




}