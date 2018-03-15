<?php 
$pearl=mysqli_connect('localhost','root','','deletepearl');
if (isset($_GET['id'])) {
	extract($_GET);
	mysqli_query($pearl,"DELETE from users where id=$id");
	# code...
}
header('location:user.php');


 ?>