<?php
	session_start();

	$fileCreated = false;

	if (isset($_SESSION['FILE_CREATED'])){
		$fileCreated = $_SESSION['FILE_CREATED'];
		unset($_SESSION['FILE_CREATED']);        
	}

	$fileUpload = false;

	if (isset($_SESSION['FILE_UPLOAD'])){
		$fileUpload = $_SESSION['FILE_UPLOAD'];
		unset($_SESSION['FILE_UPLOAD']);        
	}

	$duplicated = array();

	if (isset($_SESSION['DUPLICATED'])){
		$duplicated = $_SESSION['DUPLICATED'];
		unset($_SESSION['DUPLICATED']);        
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROJECT LAMP 02</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
			<h2 class="text-center">LAMP 2 - Project - Part 1</h2>
                <form action="./createCSV.php" method="post">
					<button type="submit" class="btn btn-defaul btn-block">Create CSV File</button>
				</form>
				<hr>
				<form action="./import.php" method="post" enctype="multipart/form-data">
					<input class="form-control" type="file" name="file" id="formFile" accept=".csv"> <br>
					<button type="submit" name="submit" class="btn btn-defaul btn-block">Upload CSV File</button>
				</form>
				<hr>
				<form action="./output.php" method="post" enctype="multipart/form-data">
						<button type="submit" name="output" class="btn btn-defaul btn-block">Get data</button>
				</form>
				<?php
					if ($fileCreated) {
						echo '<p class="bg-success text-center">File Created with succes</p>';
					}
				?>
				<?php
					if ($fileUpload) {
						echo '<p class="bg-success text-center">File Uploaded to Database</p>';
						echo "<pre> Duplicated Names Not Included: ";
						print_r($duplicated);
						echo "</pre>";
					}
				?>
            </div>
        </div>
    </div>
</body>
</html>

