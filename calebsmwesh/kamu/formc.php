<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
	<form method="$_GET">
		firstname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="firstname" class="form-control" type="text" required=""><br>
		middlename:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="middlename" class="form-control" type="text" required=""><br>
		surname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="surname" class="form-control" type="text"><br>
		<?php
		$ruby=$_GET['sur_name'];
		if (!isset($ruby) or empty($ruby)) {
			# code...
			echo "fill in your surname";
		}
		echo "<br>";
		?>

		gender:<br>
		<input type="radio" name="gender" value="female" checked="female">female<br>
		<input type="radio" name="gender" value="male" checked="male">male<br>
		<input type="radio" name="gender" value="prefer not to say" checked="prefer not to say">prefer not to say<br>
		phone:<span class="glyphicon glyphicon-phone"></span><br>
		<input type="number" name="phone"><br>
		Email:<span class="glyphicon glyphicon-envelope"></span><br>
		<input type="Email" name="Email"><br>
		password:
		<input type="password" name="password" class="form-control" type="text" required=""><br>
		confirm password:
		<input type="password" name="confirm password" class="form-control" type="text" required=""><br>
		<br>
		<br>
		<button class="btn danger">reset</button>
		<button class="btn success">submit</button>


<?php
$cale=$_GET['password'];
if (strlen($cale)<7) {
	# code...
	echo "incorrect password";


}else
echo "correct";
?>
<?php
$mwesh=$_GET['confirn password'];
if (strlen($mwesh===$cale)) {
	# code...
}echo "okay";


?>
<?php
$ben=$_GET['phone'];
if (is_string($ben)) {
	# code...
	echo "wrong input";
}else{

	echo "";
}
?>


	</form>
	</div>
</div>
</body>
</html>