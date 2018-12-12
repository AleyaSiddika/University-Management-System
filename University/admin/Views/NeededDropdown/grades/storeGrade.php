<?php
include ("../../../vendor/autoload.php");
use App\Utility\Utility;
use App\Grade\Grade;
/*Utility::debug($_POST);*/
$obj = new Grade();
$obj->setData($_POST)->store();

?>