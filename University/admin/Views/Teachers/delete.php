<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\Teachers\Teachers;

$p = new Teachers();
$p->setData($_POST)->delete($_GET['id']);


?>