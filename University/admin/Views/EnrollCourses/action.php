<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['reg_id'])){
    $reg_id = $_POST['reg_id'];
    $query = "select * from `register_stds` where register_stds.id =".$reg_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $tea = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($tea);
}


?>


