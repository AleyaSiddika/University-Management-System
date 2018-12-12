<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Rooms\Rooms;
$p = new Rooms();
$p->setData($_POST)->update();

?>