<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Designation\Designation;
/*Utility::debug($_POST);*/
$obj = new Designation();
$obj->setData($_POST)->store();

?>