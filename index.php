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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">	
	<style>
		.mt-10 {
				margin-top: 10px;
		}
	</style>
</head>
<body>
		<?php
        // navigation menu
        require_once('./components/navbar.php');
    ?>
		<div class="container">
        <div class="row justify-content-center mt-10">
            <div class="col-6">
							<h2 class="text-center">LAMP 2 - Project - Part 2</h2>
              <form action="./createCSV.php" method="post">
										<button type="submit" class="btn btn-light btn-block">Create CSV File</button>
							</form>
							<hr>
							<form action="./import.php" method="post" enctype="multipart/form-data">
								<input class="form-control" type="file" name="file" id="formFile" accept=".csv"> <br>
								<button type="submit" name="submit" class="btn btn-lightt btn-block">Upload CSV File</button>
							</form>
							<hr>
							<form action="./output.php" method="post" enctype="multipart/form-data">
									<button type="submit" name="output" class="btn btn-light btn-block">Get data</button>
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

