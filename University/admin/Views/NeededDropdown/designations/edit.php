<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Designation\Designation;
$p = new Designation();
$p->setData($_POST)->update();

?>