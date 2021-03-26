<?php

$conn = mysqli_connect("localhost", "root", "", "hr_db");

if(isset($_POST["submit"])){

    $sql = "DELETE FROM hr_employees";
    mysqli_query($conn, $sql);

    if($_FILES['file']['name']) {

        $filename = explode('.',$_FILES['file']['name']);

        if($filename[1] == 'csv') {
            $skipLine = 0;
            $handle = fopen($_FILES['file']['name'], "r");
            while ($data = fgetcsv($handle)) {
                $skipLine++;
                $column1 = mysqli_real_escape_string($conn, $data[0]);
                $column2 = mysqli_real_escape_string($conn, $data[1]);
                $column3 = mysqli_real_escape_string($conn, $data[2]);
                $column4 = mysqli_real_escape_string($conn, $data[3]);
                $column5 = mysqli_real_escape_string($conn, $data[4]);
                $column6 = mysqli_real_escape_string($conn, $data[5]);
                $column7 = mysqli_real_escape_string($conn, $data[6]);
                
                if ($skipLine > 1){
                    $fullName[] = ($column1 ." ". $column2);

                    
                    $sql = "INSERT ignore into hr_employees(surname, givenName, birthDate, gender, hireDate, initialLevel, isFullTime) values ('$column1', '$column2', '$column3', '$column4', '$column5', '$column6', '$column7')";
                    mysqli_query($conn, $sql);
                }
            }

            foreach($fullName as $key => $val){
                unset($fullName[$key]); 
                if (in_array($val,$fullName)){
                 $duplicated[] = $val;
                }
              }

            fclose($handle);

            session_start();
           
            $_SESSION['FILE_UPLOAD'] = true; 
            $_SESSION['DUPLICATED'] = $duplicated;

            header("Location:home.php");

        }
    }
}
?>
