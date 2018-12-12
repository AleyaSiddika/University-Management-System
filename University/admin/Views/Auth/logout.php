<?php

use App\Utility\Utility;

session_start();

if(!empty( $_SESSION['userid'])){
    unset($_SESSION['userid']);
    $_SESSION['Msg'] = "<div class='alert alert-border-left'>you successfully loged out</div>";
    header("location:../../../index.php");
}
?>