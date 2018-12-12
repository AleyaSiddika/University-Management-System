<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\EnrollCourses\EnrollCourses;
/*Utility::debug($_POST);*/
$obj = new EnrollCourses();
$obj->setData($_POST)->store();

?>