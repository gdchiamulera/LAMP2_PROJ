<?php

header("Content-Type: application/json");


if (isset($_POST['id'])) {
   
   $idUser = addslashes(trim($_POST['id']));

   require_once('./dbFunctions.php');
   $user = getData('select * from hr_employees where hr_id = ?', array($idUser));
   
   $today = date('Y-m-d');
   $initialLevel = $user['initialLevel'];	
   $totalSalary = 0;
   $salaryHistory = array();
   $salaryHistory['payHistory'] = array();
   $start_date = $user['hireDate'];	
   $end_date = date('Y-m-d');
   $iteration = 1;

   while (strtotime($start_date) <= strtotime($end_date)) {					
      
      $actualSalary = getData('select salary from salary where date_begin <= ? and date_end >= ? and level = ? ', array($start_date, $start_date, $initialLevel));		
      
      if (strtotime($start_date) < strtotime($end_date)) {			
         $salaryHistory['payHistory'][] = creteNewPayHistory($start_date, $end_date, $actualSalary['salary'], $user['isFullTime'], $iteration, $initialLevel);		
         
         $totalSalary += $salaryHistory['payHistory'][count($salaryHistory) - 1]['salary'];
      }
      
      if ($iteration == 1) {
         $start_date = getFirstDate($start_date);
      } else {
         $start_date = date ("Y-m-d", strtotime("+1 year", strtotime($start_date)));		
      }
      
      if ($initialLevel < 9) {
         ++$initialLevel;
      }	
      ++$iteration;
   }
 
   $salaryHistory['totalSalary'] = number_format($totalSalary, 2, '.', '');
    $salaryHistory['isFullTime'] = $user['isFullTime'] ? true : false;
   $salaryHistory['givenName'] = $user['givenName'];
   $salaryHistory['surname'] = $user['surname'];

   echo json_encode($salaryHistory);
 } else {
    http_response_code(500);
 }

 function creteNewPayHistory($startDate, $today, $salary, $isFullTime, $iteration, $initialLevel) {		
	$payHistory = array();
	$payHistory['startDate'] = $startDate;
	$endDate = null;
	
	
	if ($iteration == 1) {
		$year = date('Y', strtotime($startDate));
		$endDate =  mktime(0, 0, 0, 1, 1, $year + 1);
		// var_dump(date('Y-m-d', $endDate));
		$endDate = date('Y-m-d', $endDate);
		
		$endDate = date('Y-m-d', strtotime("-1 day", strtotime($endDate)));
	} else {
		$endDate = date ("Y-m-d", strtotime("+1 year", strtotime($startDate)));
		$endDate = date ("Y-m-d", strtotime("-1 day", strtotime($endDate)));
	}	
	
	$date = null;
	if(strtotime($endDate) < strtotime($today)) {
		$payHistory['endDate'] = $endDate;
		$date = $endDate;
	} else {
		$payHistory['endDate'] = $today;   
		$date = $today;
	}
	$payHistory['level'] = $initialLevel;
	$payHistory['salary'] = $isFullTime ? 
		number_format((float)(setLastYearSalaryFullTime($salary, $startDate, $date)), 2, '.', '') 
		: number_format(setPartTimeSalary($salary), 2, '.', '');	
	
	return $payHistory;
}

function setLastYearSalaryFullTime ($actualSalary, $start_date, $end_date) {
   $monthSalary = $actualSalary / 12;
   $ts1 = strtotime($start_date);
   $ts2 = strtotime($end_date);
   $monthInitial = date('m', $ts1);
   $monthFinal = date('m', $ts2);
   $diff = $monthFinal - $monthInitial + 1;	
   return $monthSalary * $diff;
}

function setPartTimeSalary ($actualSalary) {
   return ($actualSalary / 261) / 8;
}

function getNumberOfWeek ($start_date, $end_date) {
   $date1 = new DateTime($start_date);
   $date2 = new DateTime($end_date);

   $difference_in_weeks = $date1->diff($date2)->days / 7;
   return (int)$difference_in_weeks;
}

function getFirstDate ($startDate) {
	$newDate = null;
	$year = date('Y', strtotime($startDate));
	$newDate =  mktime(0, 0, 0, 1, 1, $year + 1);	
	$newDate = date('Y-m-d', $newDate);
	return $newDate;
}
?>