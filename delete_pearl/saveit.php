<?php 
if (isset($_POST['username'])) {
	# code...
	$pearl=mysqli_connect('localhost','root','','deletepearl');
	if (!$pearl) {
		# code...
		echo "Failed to connect to the database";

	}
	else{
		extract($_POST);
		$insertme="INSERT INTO `users`(`id`,`username`,`password`)VALUES(NULL,'$username','$password')";
		$pearli=mysqli_query($pearl,$insertme);
		if ($pearli) {
			# code...
			echo "Successfully saved into the database. Feel free to proceed";
		}
	}
}


 ?>