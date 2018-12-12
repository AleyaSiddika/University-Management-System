<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Days\Days;
$p = new Days();
$p->setData($_POST)->update();

?>