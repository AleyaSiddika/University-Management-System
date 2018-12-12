<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['reg_id'])){
    $reg_id = $_POST['reg_id'];
    $query = "select * from `register_stds` where register_stds.id =".$reg_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $regs_id = $stmt->fetch(PDO::FETCH_ASSOC);

    $query1 = "SELECT std_results.course,std_results.grade_letter FROM std_results where std_results.std_reg=" . $reg_id;
    $stmt1 = $db->prepare($query1);
    $stmt1->execute();
    $regs = $stmt1->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'reg_id'=>$regs_id,
        'reg'=>$regs,

    ];
    echo json_encode($data);
}

/*if(isset($_POST['reg_id'])) {
    $reg_id = $_POST['reg_id'];
    $query = "SELECT std_results.course,std_results.grade_letter FROM std_results where std_results.std_reg=" . $reg_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $regs_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'reg_id'=>$regs_id,
    ];
    echo json_encode($data);

}*/

?>


