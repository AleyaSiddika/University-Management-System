<?php
include ("../../vendor/autoload.php");
use App\CourseAssignTeacher\CourseAssignTeacher;
/*Utility::debug($_POST);*/

$p = new CourseAssignTeacher();
$p->setData($_POST)->update();

?>