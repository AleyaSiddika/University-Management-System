<?php
include ("../../vendor/autoload.php");
use App\Auth\Auth;
use App\Utility\Utility;
/*Utility::debug($_POST);*/

$p = new Auth();
 $p->login($_POST);



