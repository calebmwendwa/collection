<?php 
if (isset($_POST['username'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	//connecting my database
	$conn=mysqli_connect("localhost","root","","","new");

	$results=mysqli_query($conn,"select * from users  where username='$username' and Pass='$password' ")
	or die(mysqli_error($conn));
	if (mysqli_num_rows($results)>0) {
		# code...
		echo "Login Successful";
	} else {
		# code...
		echo "login Failed";
	}
	
}




 ?>
