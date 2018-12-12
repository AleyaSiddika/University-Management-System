<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Semester\Semester;
/*Utility::debug($_POST);*/
$obj = new Semester();
$obj->setData($_POST)->store();

?>