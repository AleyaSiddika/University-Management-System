<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;

use App\RegisterStudents\RegisterStudents;
$p = new RegisterStudents();
$p->setData($_POST)->update();

?>