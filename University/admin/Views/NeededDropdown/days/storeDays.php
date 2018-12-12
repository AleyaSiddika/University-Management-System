<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Days\Days;
/*Utility::debug($_POST);*/
$obj = new Days();
$obj->setData($_POST)->store();

?>