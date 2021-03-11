<?php

header("Content-Type: application/json");

$db_conn = connect_db();

if (!empty($_POST['txt-surname']) && !empty($_POST['txt-given-name'])){
	save_data($db_conn);
}
$sql = "SELECT * from hr_employees ORDER BY hr_id DESC";
$rs = $db_conn->query($sql);

if($rs->num_rows > 0){
    $posts = array("status" => "OK");
    $posts['posts'] = array();

    while($row = $rs->fetch_assoc()){
        array_push($posts['posts'], $row);
    }
    echo json_encode($posts);
}
else{

    echo '{ "status": "None" }';

}

disconnect_db($db_conn);

function connect_db(){
    $db_conn = new mysqli("localhost", "root", "!Lamp2!", "hr_db");
    if ($db_conn->connect_errno) {
        printf ("Could not connect to database server\n Error: "
            .$db_conn->connect_errno ."\n Report: "
            .$db_conn->connect_error."\n");
        die;
    }
	if (!$db_conn->set_charset("utf8")){
		echo "Error, could not set character set\n";
		$db_conn->close();
		die;
	}
    return $db_conn;
}

function disconnect_db($db_conn){
    $db_conn->close();
}

function save_data($db_conn){
    $column1 = $db_conn->real_escape_string($_POST['txt-surname']);
    $column2 = $db_conn->real_escape_string($_POST['txt-given-name']);
    $column3 = $db_conn->real_escape_string($_POST['txt-date-of-birth']);
    $column4 = $db_conn->real_escape_string($_POST['drop-gender']);
    $column5 = $db_conn->real_escape_string($_POST['txt-hire-date']);
    $column6 = $db_conn->real_escape_string($_POST['txt-initial-level']);

    $sql = "INSERT INTO hr_employees(surname, givenName, birthDate, gender, hireDate, initialLevel) values('$column1', '$column2', '$column3', '$column4', '$column5', '$column6')";
    $db_conn->query($sql);

    echo 'data saved';
}


function update_data($db_conn){
    
}

?>