	<?php include('server.php') ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


		<title>login</title>
	</head>
	<body>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	     	<!-- Brand/logo -->
	  			<a class="navbar-brand" href="#">samm</a>
	  
	  		<!-- Links -->
	  		<ul class="navbar-nav">
	    	<li class="nav-item">
	      	<a class="nav-link" href="#">home</a>
	   		 </li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="#">Contact us</a>
	    	</li>
	   		 <li class="nav-item">
	      <a class="nav-link" href="#">About us</a>
	    </li>
	  </ul>
	</nav>

		<div class="jumbotron jumbotron-fluid">
			<div class="container">
			<form method="POST" action="registration.php">
				<h1 align="center"><u>ISSA LOG IN FORM </u></h1>
				<p>Username</p>
				<input type="text" name="Username" placeholder="Enter Username...">
				<br>
				<p>Password</p>
				<input type="password" name="pass" placeholder="Enter Password...">
				
			</form>
			</div>
		</div>

	</body>
	</html>