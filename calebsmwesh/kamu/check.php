<?php
$servername="localhost";
$username="root";
$password="";
$db="caleb";

$conn=mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	# code...
	die("connection failed" . mysqli_connect_error());

}
echo "successful connection";
?>