<?php

header("Content-Type: application/json");


if (isset($_POST['id'])) {
    $idUser = addslashes(trim($_POST['id']));
    $today = date("Y-m-d");
    $range1s = date('Y-m-d', strtotime("01/01/1900"));
    $range1e = date('Y-m-d', strtotime("12/31/2017"));
    $range2s = date('Y-m-d', strtotime("01/01/2018"));
    $range2e = date('Y-m-d', strtotime("03/13/2020"));
    $range3s = date('Y-m-d', strtotime("03/14/2020"));
    $range3e = date('Y-m-d', strtotime("12/31/2020"));
    $range4s = date('Y-m-d', strtotime("01/01/2021"));
    $range4e = date('Y-m-d', strtotime("12/31/2021"));
    $difference = [];
    
   

    require_once('./dbFunctions.php');

    $user = getData('select * from hr_employees h left join salary s on h.initialLevel = s.level where h.hr_id = ? and h.hiredate BETWEEN s.date_begin AND s.date_end', array($idUser));
    $salary = getMultipleData('select * from salary', array());

   if ($user['isFullTime'] == 1){
   //If Full Time
      
      if ($user['hireDate'] > $range1s && $user['hireDate'] < $range1e){
         
         switch ($user['initialLevel']){
            case 1:
               $salary1 = 'Case 1';
               break;
            case 2:
               $salary1 = 'Case 2';
               break;
            case 3:
               $salary1 = 'Case 3';
               break;
            case 4:
               $salary1 = 'Case 4';
               break;
            case 5:
               $salary1 = 'Case 5';
               break;
            case 6:
               $salary1 = 'Case 6';
               break;
            case 7:
               $salary1 = 'Case 7';
               break;
            case 8:
               $salary1 = 'Case 8';
               break;
            case 9:
               $salary1 = 'Case 9';
               break;
         }
         
         //$salary1 = getData('select salary from hr_employees h left join salary s on h.initialLevel = s.level where h.hr_id = ? and h.hiredate BETWEEN s.date_begin AND s.date_end', array($idUser));
      }
      else if ($user['hireDate'] > $range2s && $user['hireDate'] < $range2e){

         $salary1 = 'range2';
      }
      else if ($user['hireDate'] > $range3s && $user['hireDate'] < $range3e){
         $salary1 = 'range3';
      }
      else if ($user['hireDate'] > $range4s && $user['hireDate'] < $range4e){
         $salary1 = 'range4';
      }
      



   }
   else{
   //If Part Time
      $salary1 = $user['hireDate'];
   }

   






    $result = [$user, $salary, $salary1];


   
    echo json_encode($result); 
 } else {
    http_response_code(500);
 }
?>