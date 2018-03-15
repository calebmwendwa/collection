<!DOCTYPE html>
<html>
<head>
	<title>constants</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript"></script>
</head>
<h1>constants</h1>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			
		
	<?php



	define('ruby', 'i love class ruby');
	echo ruby;

	?>
	<form method="$_GET">
		firstname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="firstname" class="form-control" type="text" required=""><br>
		middlename:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="middlename" class="form-control" type="text" required=""><br>
		surname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="surname" class="form-control" type="text" required=""><br>
		email address:<br>
		<input type="text" name="email address" class="form-control" type="text" required=""><br>
		password:<br>
		<input type="password" name="password" class="form-control" type="text" required=""><br>
		<button type="submit" class="btn-success">submit</button>
		<button type="reset" class="btn-danger">reset</button><br>
		confirm password:<br>
		<input type="password" name="confirm password" class="form-control" type="text" required=""><br>
		<button type="submit" class="btn-success">submit</button>
		<button type="reset" class="btn-danger">reset</button>
	</form>
	<h2>file</h2>
	<p><q>a file refers to an object in a computer that is used to store information settimgs or even commands (a- (write only)(r+)read and write</q></p>
	<?php

if (strlen('password')<7) {
	# code...
	echo "maximum of seven";
} else{


	echo "";
}



	?>
<?php
$caleb=$_GET['password'];
$ben=$_GET['confirm password'];
if ($caleb===$ben) {
	# code...
	echo "";
} else {
	echo "password mismatch";
}





?>

</form>

</div>
<?php

$mac=fopen("edy.txt", "w") or die("unable to open file");
$macm="my name is macm and am in class ruby";
fwrite($mac, $macm);
fclose($mac);
?>
<?php
$mac=fopen("edy.txt", "r") or die("unable to open file");
echo fread($mac, filesize("edy.txt"));
fclose($mac);
?>
<h3>uploading a file on php</h3>
<form method="$_POST" action="upload.php">
	click on image to upload:<br>
	<input type="file" name="upload" id="thefiletobeuploaded">
	<input type="submit" name="submit" value="upload image here" class="btn-danger">

	






</form>
	</div>
</body>
</html>