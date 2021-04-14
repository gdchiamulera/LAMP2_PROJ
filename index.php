<?php

if (empty($_SERVER['HTTPS'])) {

	header('Location: https://localhost/lamp/index.php');
	
	die();
	
}

session_start();

if (!empty($_SESSION['userid'])) {
	header("Location: home.php");
	die();
} 

$loginFail = false;

$error = '';

if (isset($_POST['login']))
{
	require_once('./dbFunctions.php');
	$userid = $_POST['userid'];
	$password = $_POST['password'];		

	$query = "select * from users where userid = ? && password = ?";
	
	$result = getMultipleData($query, array($userid, $password));	
	var_dump(count($result));

	if (count($result) == 1)
	{
		$_SESSION['userid'] = $userid;
		header("Location: home.php");
		die();
	}
	else
	{
		$loginFail = true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROJECT LAMP 02</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">		    
    <style>
        .border-style {
            border: 1px solid black;
        }
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
            <div class="col-xs-12 col-sm-8 col-md-6">
								<h2 class="text-center">Login</h2>                

                
                <!-- hide and show when needed -->
                <!-- <div class="alert alert-success" role="alert">
                    Success message
                </div> -->
                <?php
								if ($loginFail) {
									echo '<div class="alert alert-danger" role="alert">
                                    Your login credentials are invalid. Please try again.
                                    </div>';
								}
							?>
                
                <!-- <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
                </div> -->
                <form method="post">
								<div class="form-group">
										<label for="txt-email">Email</label>
										<input type="text" class="form-control" name="userid" id="txt-email">                        
								</div>
								<div class="form-group">
										<label for="txt-password">Password</label>
										<input type="password" class="form-control" name="password" id="txt-password">                        
								</div>
								<hr>
								<button type="submit" class="btn btn-block btn-light" name="login" id="btn-login">Login</button>
                </form>
                
            </div>
        </div>
    </div>    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>   
</body>
</html>
