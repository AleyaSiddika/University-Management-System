<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Days\Days;
/*Utility::debug($_POST);*/

$p = new Days();
$p->setData($_POST)->delete($_GET['id']);


?>