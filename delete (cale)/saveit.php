<?php
if (isset($_POST['username'])) {
	$ruby=mysql_connect('localhost', 'root', '', 'delete me');
	if (!$ruby) {
		echo "failed to connect";
		# code...

	}
	else{

     extract($_POST);
     $insertme="INSERT INTO `users()` (`id`, `username`, `password`) VALUES(NULL, '$username', 'password')";
     $cale=mysqli_query($ruby,$insertme);
     if ($cale) {
     	echo "saved successfully into my database";
     }

	}
}
?>