<?php
session_start();
//initialize variable for username and email
$email="";
$password="";
$errors=array();
//connecting to the database
$db=mysqli_connect("localhost", "root", "","hospital
	");
//we want patients to sign in
if (isset($_POST['sign in'])) {
	# code...
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$confirmpassword=mysqli_real_escape_string($db,$_POST['confirmpassword']);
	//form validation
	if (empty($email)) {array_push($errors, "input valid email");}
	if (empty($password)) {array_push($errors, "password required");}
	if (empty($password!=$confirmpassword)) {array_push($errors, "password mismatch");}
}
$user_check_query="SELECT * FROM vardict WHERE  email='$email' LIMIT 1";
$ressult=mysqli_query($db, $user_check_query);
$vardict=mysqli_fetch_assoc($result);
//conditional statement
if ($vardict) {
	# code...
	if ($vardict['email']===$email) {
		# code...
		array_push($errors, "email exists try another one");
	}
}
//signing in for patients
if (count($erros)==0) {
	# code...
	$query="INSERT INTO vardict(email, password) VALUES('$email', '$password')";
	mysqli_query($db, $query);
	$_SESSION['password']=$password;
	$_SESSION['success']="you are now signed in";
	header('location: index.php');
}
if (empty($email)) {array_push($errors, "email is required");}
if (empty($password)) {array_push($errors, "password is required");}
if (count($errors)==0) {
	$password=md5($password);
	$query="SELECT * FROM users WHERE email='$email' and password='$password'";
	$results=mysqli_query($db,$query);
	if (mysqli_num_rows($results)==1) {
		$_SESSION['email']=$email;
		$_SESSION['success']="are now registered in";
		header('location:index.php');
 	# code...
	}else{
		array_push($errors, "Try again...");
	}
  }
?>