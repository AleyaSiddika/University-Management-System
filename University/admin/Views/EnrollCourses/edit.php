<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;

use App\EnrollCourses\EnrollCourses;
$p = new EnrollCourses();
$p->setData($_POST)->update();

?>