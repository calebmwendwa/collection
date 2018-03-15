<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			
		
<span class="glyphicon glyphicon-user"></span>
<h1>log in Here</h1>
<form method="POST" action="reg.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
	username:<br><br>
	<input type="text" name="username" id="user"><br>
	email:<br><br>
	<input type="email" name="email" id="email"><br>
	password:<br><br>
	<input type="password" name="password" id="pass"><br>
	confirmpassword:<br><br>
	<input type="password" name="confirm password" id="confirm pass"><br>


<button type="register" class="btn-success">register</button>
<button type="quit" class="btn-danger">quit</button>
</div>
		
	</div>
</form>

</body>
</html>