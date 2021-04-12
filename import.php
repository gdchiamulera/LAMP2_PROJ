<?php

require_once('./dbFunctions.php');

if(isset($_POST["submit"])){
    
    deleteData("DELETE FROM hr_employees");

    if($_FILES['file']['name']) {

        $filename = explode('.',$_FILES['file']['name']);

        if($filename[1] == 'csv') {
            $skipLine = 0;
            $handle = fopen($_FILES['file']['name'], "r");
            while ($data = fgetcsv($handle)) {
                $skipLine++;                

                $column1 = $data[0];
                $column2 = $data[1];
                $column3 = $data[2];
                $column4 = $data[3];
                $column5 = $data[4];
                $column6 = $data[5];
                $column7 = $data[6];
                
                if ($skipLine > 1) {
                    $fullName[] = ($column1 ." ". $column2);

                    
                    $sql = "INSERT ignore into hr_employees(surname, givenName, birthDate, gender, hireDate, initialLevel, isFullTime) values (?, ?, ?, ?, ?, ?, ?)";
                    insertData($sql, array($column1, $column2, $column3, $column4, $column5, $column6, $column7));
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
