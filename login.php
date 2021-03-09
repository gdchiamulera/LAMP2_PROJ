<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROJECT LAMP 02</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">		
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
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
                <div class="alert alert-success" role="alert">
                    Success message
                </div>
                <div class="alert alert-danger" role="alert">
                    Error Message
                </div>
								<div class="form-group">
										<label for="txt-email">Email</label>
										<input type="text" class="form-control" id="txt-email">                        
								</div>
								<div class="form-group">
										<label for="txt-password">Password</label>
										<input type="password" class="form-control" id="txt-password">                        
								</div>
								<hr>
								<button class="btn btn-block btn-light" id="btn-login">Login</button>
            </div>
        </div>
    </div>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>        
        $('#btn-login').on('click', function (e) {  
            alert('Login Action');
            e.preventDefault();            
        });
    </script>
</body>
</html>
