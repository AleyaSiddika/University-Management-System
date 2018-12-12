<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\EnrollCourses\EnrollCourses;
/*Utility::debug($_POST);*/

$p = new EnrollCourses();
$p->setData($_POST)->delete($_GET['id']);


?>