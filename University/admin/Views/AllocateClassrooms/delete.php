<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;
use App\AllocateClassrooms\AllocateClassrooms;

$p = new AllocateClassrooms();
$p->setData($_POST)->delete($_GET['id']);


?>