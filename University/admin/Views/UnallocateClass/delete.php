<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\AllocateClassrooms\AllocateClassrooms;
/*Utility::debug($_POST);*/

$p = new AllocateClassrooms();
$p->setData($_POST)->deleteAllData();


?>