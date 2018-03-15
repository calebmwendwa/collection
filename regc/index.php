<?php

session_start();

if (!isset($_SESSION['username'])) {
$_SESSION['msg']="you must be logged in first";
header('location:login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="error succcess">
	<?php
	
    unset($_SESSION['succcess']);
	?>
	</div>

	<?php if (isset($_SESSION['username'])): ?>
<p>welcome to vardict hospital</p>
<p><a href="index.php?logout='1'" style="color:red;"></a></p>

	<?php endif ?>
	
</body>
</html>
