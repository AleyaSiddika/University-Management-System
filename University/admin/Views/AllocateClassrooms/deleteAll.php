<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\AllocateClassrooms\AllocateClassrooms;

$p = new AllocateClassrooms();
$p->setData($_POST)->deleteAll();

if(empty($_POST['chkbox'])){
    header("location:showAlloRooms.php");
    $_SESSION['Msg']  =
        "<div style=' border-radius: 3px;                   
                            font-size: 18px; 
                            background-color:#ef3b70 ; 
                            color:#fff;'> 
                                    You can't select any data
                            </div>";
}



?>



