<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\StudentResults\StudentResults;

$p = new StudentResults();
$p->setData($_POST)->Pdf();

?>