<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\StudentResults\StudentResults;
/*Utility::debug($_POST);*/
$obj = new StudentResults();
$obj->setData($_POST)->store();

?>