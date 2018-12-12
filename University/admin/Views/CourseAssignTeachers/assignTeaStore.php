<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\CourseAssignTeacher\CourseAssignTeacher;
/*Utility::debug($_POST);*/
$obj = new CourseAssignTeacher();
$obj->setData($_POST)->store();

?>