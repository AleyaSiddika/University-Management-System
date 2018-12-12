<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Rooms\Rooms;
/*Utility::debug($_POST);*/
$obj = new Rooms();
$obj->setData($_POST)->store();

?>