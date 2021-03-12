<?php

header("Content-Type: application/json");


if (isset($_POST['id'])) {
    $idUser = addslashes(trim($_POST['id']));

    require_once('./dbFunctions.php');

    $user = getData('select * from hr_employees where hr_id = ?', array($idUser));

    echo json_encode($user); 
 } else {
    http_response_code(500);
 }
?>