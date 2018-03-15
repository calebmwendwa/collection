<?php
session_start();
//initialize variable for username and email
$username="";
$email="";
$errors=array();
//connecting to the database
$db=mysqli_connect("localhost", "root", "","registration");
//we want to register users
if (isset($_POST['register'])) {
	# code...
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$confirmpassword=mysqli_real_escape_string($db,$_POST['confirmpassword']);
	//form validation
	if (empty($username)) {array_push($errors, "input username");}
	if (empty($email)) {array_push($errors, "input valid email");}
	if (empty($password)) {array_push($errors, "password required");}
	if (empty($password!=$confirmpassword)) {array_push($errors, "password mismatch");}
}
$user_check_query="SELECT * FROM users WHERE username='$username' or email='$email' LIMIT 1";
$ressult=mysqli_query($db, $user_check_query);
$user=mysqli_fetch_assoc($result);
//conditional statement
if ($user) {
	# code...
	if ($user['username']===$username) {
		# code...
		array_push($errors, "name alredy exists");
	}
	if ($user['email']===$email) {
		# code...
		array_push($errors, "email exists try another ane");
	}
}
//registration for new users
if (count($erros)==0) {
	# code...
	$query="INSERT INTO users(username, email, password) VALUES('$username, '$email', '$password')";
	mysqli_query($db, $query);
	$_SESSION['username']=$username;
	$_SESSION['success']="you are now logged in";
	header('location: index.php');
}
if (empty($username)) {array_push($errors, "username is required");}
if (empty($password)) {array_push($errors, "password is required");}
if (count($errors)==0) {
	$password=md5($password);
	$query="SELECT * FROM users WHERE username='$username' and password='$password'";
	$results=mysqli_query($db,$query);
	if (mysqli_num_rows($results)==1) {
		$_SESSION['username']=$username;
		$_SESSION['success']="are now logged in";
		header('location:index.php');
 	# code...
	}else{
		array_push($errors, "Try again...");
	}
  }
?>