<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Rooms\Rooms;
/*Utility::debug($_POST);*/

$p = new Rooms();
$p->setData($_POST)->delete($_GET['id']);


?>