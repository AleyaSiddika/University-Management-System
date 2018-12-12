<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Grade\Grade;
/*Utility::debug($_POST);*/

$p = new Grade();
$p->setData($_POST)->delete($_GET['id']);


?>