<?php include('Server.php') ?>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="POST" action="registration.php">
		<?php include('errors.php') ?>
	username:	<input type="text" name="username" id="username" value="<?php echo $username; ?>"><br><br>
	E-mail:	<input type="text" name="email" id="email" value= "<?php echo $email; ?>"><br><br>
	Password: <input type="password" name="password" id="password" value=><br><br>
	Confirm Password: <input type="password" name="confirm password" id="confirm password" value="<?php echo $confirmpassword; ?>"><br><br>
<button>Register</button>


	<p>Already a member?<a href="login.php"> Sign in</a></p>
	</form>
</body>
</html>