<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
/*Utility::debug($_POST);*/
use App\Grade\Grade;
$p = new Grade();
$p->setData($_POST)->update();

?>