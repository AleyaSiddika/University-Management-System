<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');


if(isset($_POST['ca_id'])) {
    $ca_id = $_POST['ca_id'];
    $query  = "SELECT classrooms_allocate.department,classrooms_allocate.course,classrooms_allocate.room,classrooms_allocate.days,classrooms_allocate.start_time,classrooms_allocate.end_time,courses.c_name FROM classrooms_allocate 
              INNER JOIN courses ON classrooms_allocate.course = courses.id where classrooms_allocate.department=".$ca_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $course_id = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $query2 = "SELECT * FROM `courses` WHERE department=".$ca_id;
    $stmt2 = $db->prepare($query2);
    $stmt2->execute();
    $code = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'course'=>$course_id,
        'codes'=>$code,
    ];

    echo json_encode($data);

}

?>


