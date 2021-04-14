<?php

header("Content-Type: application/json");

if (isset($_POST['id'])) {
   
    $idUser = addslashes(trim($_POST['id']));
 
    require_once('./dbFunctions.php');
 
    $selectedUser = getData('SELECT surname, givenName, birthDate, hireDate, TIMESTAMPDIFF (YEAR, birthDate, CURDATE()) AS age, (TIMESTAMPDIFF (YEAR, birthDate, CURDATE()) + TIMESTAMPDIFF (YEAR, hireDate, CURDATE())) AS timework FROM hr_employees WHERE hr_id = ?', array($idUser));

    $elegible = array();
    $elegible['surname'] = $selectedUser['surname'];
    $elegible['givenName'] = $selectedUser['givenName'];
    $elegible['birthDate'] = $selectedUser['birthDate'];
    $elegible['hireDate'] = $selectedUser['hireDate'];
    $elegible['age'] = $selectedUser['age'];
    $elegible['timework'] = $selectedUser['timework'];
    $elegible['scenario'] = '';

    
    if($elegible['age'] >= 65){
        $elegible['scenario'] ='Employee is elegible to retire in scenario A';

    } 
    
    else if ($elegible['timework'] >= 85){
        $elegible['scenario'] ='Employee is elegible to retire in scenario B';

    } 
    
    else {
        $elegible['scenario'] ='Employee is not elegible to retire yet.';
    }

    echo json_encode($elegible);
    
}

else {
    http_response_code(500);
 }

