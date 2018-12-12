<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Teachers\Teachers;
/*Utility::debug($_POST);*/
$obj = new Teachers();
$obj->setData($_POST)->store();

?>