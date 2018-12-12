<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Course\Course;
/*Utility::dd($_POST);*/

$p = new Course();
$p->setData($_POST)->UndoDelete();

if(empty($_POST['chkbox'])){
    header("location:UndoshowCourse.php");
    $_SESSION['Msg']  =
        "<div style=' border-radius: 3px;                   
                            font-size: 18px; 
                            background-color:#ef3b70 ; 
                            color:#fff;'> 
                                    You can't select any data
                            </div>";
}



?>



