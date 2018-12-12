<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Course\Course;
/*Utility::debug($_POST);*/

$p = new Course();
$p->setData($_POST)->delete($_GET['id']);


?>