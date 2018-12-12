<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;

use App\Course\Course;
$p = new Course();
$p->setData($_POST)->update();

?>