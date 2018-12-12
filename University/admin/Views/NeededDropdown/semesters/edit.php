<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Semester\Semester;
$p = new Semester();
$p->setData($_POST)->update();

?>