<?php

header("Content-Type: application/json");


if (isset($_POST['id'])) {
    $idUser = addslashes(trim($_POST['id']));

    require_once('./dbFunctions.php');

    $user = getData('select * from hr_employees h left join salary s on h.initialLEvel = s.level where h.hr_id = ? and h.hiredate BETWEEN s.date_begin AND s.date_end', array($idUser));

   
    echo json_encode($user); 
 } else {
    http_response_code(500);
 }
?>