<?php

	
	$currentUrl = $_SERVER['REQUEST_URI'];
	$navbar =
	'
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-light">
			<a class="navbar-brand" href="#">Employee Project</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
									
	';
	// check the url to insert the class active on the right link
	if (!strpos($currentUrl, '/home.php')) {
			
			$navbar .= '<a class="nav-link active" href="./home.php">Home</a>';
			$navbar .= '<a class="nav-link" href="./index.php">Login</a>';
			$navbar .=  '<a class="nav-link" href="./logout.php">Logout</a>';

	} else {
			$navbar .= '<a class="nav-link" href="./home.php">Home</a>';
			$navbar .= '<a class="nav-link active" href="./index.php">Login</a>';
			$navbar .=  '<a class="nav-link" href="./logout.php">Logout</a>';
			if (!empty($_SESSION['userid']))
				{
					$navbar .= '<span class="navbar-text">Hi, ' . $_SESSION['userid'] . '</span>';
				}
	}

	$navbar .= '
				</div>
			</div>
		</nav>
	';

	echo $navbar;
?>