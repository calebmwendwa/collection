<?php 
session_start();
// Variables intialisation
$username="";
$email="";
$errors= array();
// connecting to db
$db=mysqli_connect('locolhost','root','','regi');
//now we are registering our users
if (isset($_POST['Register'])) {
	//this will enable us to recieve all input values from the form and also to avoid mysql injection
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
 	$confirmpassword=mysqli_real_escape_string($db,$_POST['confirmpassword']);
	// let us validate our forms then

if (empty($username)) {array_push($errors, "username is needed");}
if (empty($email)) {array_push($errors, "email is needed");}
if (empty($password)) {array_push($errors, "password is needed");}

if ($password!= $confirmpassword) {array_push($errors, "passwords do not match!");}
// we need to ensure that the user bring registered does not exist
$userquery = "SELECT * FROM Regid WHERE username='$username' OR email='$email' LIMIT 1";
$regi=mysqli_query($db,$userquery);
$bb=mysqli_fetch_assoc($regi);
// we check whether the user exists
if ($bb){
if ($bb['username']===$username) {
	array_push($errors, "Username Exists");}
}
if ($bb['email']===$email) {
	array_push($errors, "Email Exists");}
}

//user registration process
if(count($errors)==0){
	$password=md5($password);
	$dz="INSERT INTO Regid(username,email,password)
	values('$username','$email','$password')";
mysqli_query($db,$dz);
$_SESSION['username']=$username;
$_SESSION['success']="Welcome";
header('location:Index.php');
}
if (isset($_POST['loginuser'])) {
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	if (empty($username)) {
		# code...
		array_push($errors, "Input username");
	}
	
if (empty($password)) {
		# code...
		array_push($errors, "Input Password");
	}
	if (count($errors)==0){
		$password=md5($password);
		$dz="SELECT * FROM Regid WHERE username='$username' AND password='$password'";
		$results=msqli_query($db,$dz);
		if (mysqli_num_rows($results)==1) {
			# code...
$_SESSION['username']=$username;
$_SESSION['success']="Successful login";
header('location:Index.php');
}
else{
array_push($errors, "Wrong combo");
}
}
}	


  ?>