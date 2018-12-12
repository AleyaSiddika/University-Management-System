<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Database\Database;
use App\Auth\Auth;
use App\Department\Department;
/*Utility::debug($_POST);*/
$obj = new Department();
$obj->setData($_POST)->store();

if(isset($_POST['save'])) {

    if ($_POST['code'] ==""  && $_POST['name'] == "")  {
        $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px; 
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Code and Name is Required.
                            </div>";
        header('location:department.php');
    }


    elseif ($_POST['name'] == "") {
        $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;                           
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Name is Required.
                            </div>";
        header('location:department.php');
    }
    elseif ($_POST['code'] == "") {
        $_SESSION['Msg'] = "
                            <div style=' border-radius: 3px;  
                            font-size: 14px; 
                            background-color:#ffd5d3 ; 
                            color:#f00;'> 
                                    This Code is Required.
                            </div>";
        header('location:department.php');
    }

}
?>