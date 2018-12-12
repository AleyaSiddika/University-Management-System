<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\CourseAssignTeacher\CourseAssignTeacher;
/*Utility::debug($_POST);*/

$p = new CourseAssignTeacher();
$p->setData($_POST)->deleteAllData();


?>