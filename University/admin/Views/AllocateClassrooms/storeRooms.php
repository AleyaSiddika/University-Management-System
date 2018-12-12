<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\AllocateClassrooms\AllocateClassrooms;
/*Utility::debug($_POST);*/
$obj = new AllocateClassrooms();
$obj->setData($_POST)->store();

?>