<?php
if (isset($_POST['username'])) {
	//this is to get values passed from the username
	$username=$_POST['username'];
	$password=$_POST['password'];
	//conecting my database
	$conn=mysqli_connect("localhost", "root", "", "caleb");
	//localhost=servername
	//root=user account to enable you access all files and command statement
	//"" is a slot left for the password
	//caleb is a database name
	$ans=mysqli_query($conn,"select * from caleb where username='$username' and password='$password'") or die(mysqli_error($conn));
	if (mysqli_num_rows($ans)>0) {

		echo "login successful";
	} else {
		echo "failed to login";

	}
}




?>