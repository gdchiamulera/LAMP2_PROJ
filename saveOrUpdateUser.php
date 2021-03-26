<?php
header("Content-Type: application/json");

require_once('./dbFunctions.php');

if (isset($_POST['id']) && strlen(trim($_POST['id'])) > 0) {		
	try {		
		
		// convert the data to array to the query
		$data = setArrayData($_POST);
		// insert the user
		insertData('update hr_employees set surname = ?, givenName = ?, birthDate = ?, gender = ?, hireDate = ?, initialLevel = ?, isFullTime = ? where hr_id = ?', $data);

		// get the data from the user inserted
		$user = getData('select * from hr_employees where hr_id = ?', array($_POST['id']));

		//response if ok
		$response = array();
		$response['message'] = 'User updated successfully!';
		$response['data'] = $user;
		echo json_encode($response);
	} catch (\Throwable $th) {
		$response = array();
		$response['message'] = 'error';
		echo json_encode($response);
	}
} else {	
	try {				
		$data = setArrayData($_POST);
		
		$newId = insertData('insert into hr_employees (surname, givenName, birthDate, gender, hireDate, initialLevel, isFullTime) values (?, ?, ?, ?, ?, ?, ?)', $data);		
		$user = getData('select * from hr_employees where hr_id = ?', array($newId));
		//response if ok
		$response = array();
		$response['data'] = $user;		
		$response['message'] = 'User added successfully!';
		echo json_encode($response);
	} catch (\Throwable $th) {
		$response = array();
		$response['message'] = $th;
		echo json_encode($response);
	}
}

// set the data in a array form
// array must be in the same order used in the query
function setArrayData($post) {

	$surname = addslashes(trim($post['surname']));
	$givenName = addslashes(trim($post['givenName']));
	$birthDate = addslashes(trim($post['birthDate']));
	$gender = addslashes(trim($post['gender']));
	$hireDate = addslashes(trim($post['hireDate']));
	$initialLevel = addslashes(trim($post['initialLevel']));
	$isFullTime = addslashes(trim($post['isFullTime']));

	if (isset($post['id']) && strlen(trim($_POST['id'])) > 0) {
		$id = addslashes(trim($post['id']));
		return array($surname, $givenName, $birthDate, $gender, $hireDate, $initialLevel, $isFullTime, $id);
	} 
	return array($surname, $givenName, $birthDate, $gender, $hireDate, $initialLevel, $isFullTime);
}
?>