<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Course\Course;
/*Utility::debug($_POST);*/
$obj = new Course();
$obj->setData($_POST)->store();

?>