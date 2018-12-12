<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Department\Department;
$p = new Department();
$p->setData($_POST)->update();

?>