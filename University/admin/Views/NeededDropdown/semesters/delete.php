<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Semester\Semester;
/*Utility::debug($_POST);*/

$p = new Semester();
$p->setData($_POST)->delete($_GET['id']);


?>