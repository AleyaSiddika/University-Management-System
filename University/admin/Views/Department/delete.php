<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Department\Department;
/*Utility::debug($_POST);*/

$p = new Department();
$p->setData($_POST)->delete($_GET['id']);


?>