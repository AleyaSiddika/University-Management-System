<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Designation\Designation;
/*Utility::debug($_POST);*/

$p = new Designation();
$p->setData($_POST)->delete($_GET['id']);


?>