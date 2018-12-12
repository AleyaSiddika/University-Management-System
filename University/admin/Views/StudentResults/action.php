<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['reg_id'])){
    $reg_id = $_POST['reg_id'];
    $query = "select * from `register_stds` where register_stds.id =".$reg_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $regs_id = $stmt->fetch(PDO::FETCH_ASSOC);


    $query2 = "SELECT * FROM `enroll_courses` WHERE std_reg=".$reg_id;
    $stmt2 = $db->prepare($query2);
    $stmt2->execute();
    $course = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'reg_id'=>$regs_id,
        'courses'=>$course,
    ];
    echo json_encode($data);
}


?>


