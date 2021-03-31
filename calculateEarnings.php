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

	while (strtotime($start_date) <= strtotime($end_date)) {					
		
		$actualSalary = getData('select salary from salary where date_begin <= ? and date_end >= ? and level = ? ', array($start_date, $start_date, $initialLevel));
		$salaryHistory['payHistory'][] = creteNewPayHistory($start_date, $actualSalary['salary'], $user['isFullTime']);		
		$totalSalary += $salaryHistory['payHistory'][count($salaryHistory) - 1]['salary'];
		

		$start_date = date ("Y-m-d", strtotime("+1 year", strtotime($start_date)));		
		
		if ($initialLevel < 9) {
			++$initialLevel;
		}
		
		if (strtotime($start_date) > strtotime($end_date)) {
			
			$lastYearValues = getData('select salary from salary where date_begin <= ? and date_end >= ? and level = ? ', array($end_date, $end_date, $initialLevel));

			$salaryHistory['payHistory'][] = creteNewPayHistory($end_date, $lastYearValues['salary'], $user['isFullTime']);
			$totalSalary += $salaryHistory['payHistory'][count($salaryHistory) - 1]['salary'];
		}		
	}

   $salaryHistory['totalSalary'] = number_format($totalSalary, 2, '.', '');
	$salaryHistory['isFullTime'] = $user['isFullTime'] ? true : false;
   $salaryHistory['givenName'] = $user['givenName'];
   $salaryHistory['surname'] = $user['surname'];

   echo json_encode($salaryHistory);
 } else {
    http_response_code(500);
 }

 function creteNewPayHistory($startDate, $salary, $isFullTime) {		
   $payHistory = array();
   $payHistory['startDate'] = $startDate;
   $endDate = date ("Y-m-d", strtotime("+1 year", strtotime($startDate)));
   $endDate = date ("Y-m-d", strtotime("-1 day", strtotime($endDate)));
   $payHistory['endDate'] = $endDate;   
   $payHistory['salary'] = $isFullTime ? number_format((float)$salary, 2, '.', '') : number_format(getNumberOfWeek($startDate, $endDate) * setPartTimeSalary($salary), 2, '.', '');
   // $payHistory['salary'] = $isFullTime ? number_format($salary, 2) : setPartTimeSalary($salary);
   
   return $payHistory;
}

function setLastYearSalaryFullTime ($actualSalary, $start_date, $end_date) {
   $monthSalary = $actualSalary / 12;
   $ts1 = strtotime($start_date);
   $ts2 = strtotime($end_date);
   $monthInitial = date('m', $ts1);
   $monthFinal = date('m', $ts2);
   $diff = $monthInitial - $monthFinal;
   return $monthSalary * ($diff + 12);
}

function setPartTimeSalary ($actualSalary) {
   return (($actualSalary / 261) / 8) * 24;
}

function getNumberOfWeek ($start_date, $end_date) {
   $date1 = new DateTime($start_date);
   $date2 = new DateTime($end_date);

   $difference_in_weeks = $date1->diff($date2)->days / 7;
   return (int)$difference_in_weeks;
}
?>