<?php

$ruby=mysql_connect('localhost', 'root', '', 'delete me');
if (isset($_GET['id'])) {
	extract($_GET);
	mysqli_query($ruby,"delete from users where id=$id");
	# code...
}

header('location:users.php');
?>