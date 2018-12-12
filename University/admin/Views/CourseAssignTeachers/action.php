<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['dept_id'])){
    $dept_id = $_POST['dept_id'];

    $query = "select * from `teachers` where teachers.department =".$dept_id ;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $teachers = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $query2 = "SELECT * FROM `courses` WHERE department=".$dept_id;
    $stmt2 = $db->prepare($query2);
    $stmt2->execute();
    $course = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'teachers'=>$teachers,
        'courses'=>$course,
    ];
    echo json_encode($data);
}

if(isset($_POST['cr_id'])) {
    $course_id = $_POST['cr_id'];

    $query = "select * from `courses` where id =" . $course_id;
    $stmt4 = $db->prepare($query);
    $stmt4->execute();
    $data = $stmt4->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
}


if(isset($_POST['tea_id'])){
    $teach_id = $_POST['tea_id'];
    $query = "select * from `teachers` where teachers.id =".$teach_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $tea = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($tea);
}


?>


