<?php include('Server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
form{position: center; padding-left: 450px;}
legend{padding-left: 450px}
</style>
<body>
<div class="container" id="rr">
	<legend>Log in with us <img src="Screenshot-2018-2-22 Make A High-Quality Logo In Just 5 Minutes For Under $30 .png" width="200px" height="200px"></legend>
	<form action="login.php">
		<?php include('errors.php') ?>
	<strong>Name:</strong><br><br>	<input type="text" name="username" placeholder="Enter your username"><br><br>
	<strong>E-mail:</strong> <br><br><input type="text" name="email" placeholder="Enter your email"><br><br>
		<strong>Password:</strong> <br><br><input type="password" name="password" placeholder="Enter your password"><br><br>
<button>loginuser</button>
</div>
</form>
</body>
</html>