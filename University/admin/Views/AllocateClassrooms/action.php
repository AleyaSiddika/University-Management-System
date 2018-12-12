<?php

$db = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root','');

if(isset($_POST['course_id'])){
    $cr_id = $_POST['course_id'];
    $query = "select * from `courses` where courses.department =".$cr_id ;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $allData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($allData);
}


?>


