<?php
include ("../../vendor/autoload.php");
use App\Utility\Utility;

use App\StudentResults\StudentResults;
$p = new StudentResults();
$p->setData($_POST)->update();

?>