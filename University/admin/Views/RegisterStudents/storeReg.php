<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\RegisterStudents\RegisterStudents;
/*Utility::debug($_POST);*/
$obj = new RegisterStudents();
$obj->setData($_POST)->store();

?>