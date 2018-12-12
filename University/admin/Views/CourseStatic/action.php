<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['cr_id'])) {
    $cr_id = $_POST['cr_id'];
    $query = "SELECT assign_teachers.course_code,assign_teachers.department,assign_teachers.crs_name,assign_teachers.teacher,teachers.t_name,courses.code FROM assign_teachers  
              INNER JOIN courses ON assign_teachers.course_code = courses.id
                  INNER JOIN teachers ON assign_teachers.teacher = teachers.id where assign_teachers.department =".$cr_id;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $course_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $query2 = "SELECT * FROM `courses` WHERE department=".$cr_id;
    $stmt2 = $db->prepare($query2);
    $stmt2->execute();
    $teacher = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'course'=>$course_id,
        'seme'=>$teacher,
    ];
    echo json_encode($data);

}


?>


