<!DOCTYPE html>
<html>
<head>
	<title>revision</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript"></script>
</head>
<h1>revision</h1>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			
			<?php  

			$y=20;
			$x=10


			?>
			<form method="GET">
				num1:
				<input type="number" name="num1">
				num2:
				<input type="number" name="num2">
				<br>
				<br>
				<?php
				$ben=$_GET['num1'];
				$cale=$_GET['num2'];
				$mwesh=$ben*$cale;
				echo $mwesh;

				?>

				<button class="btn-success">submit</button>
				<button class="btn-danger">reset</button>

			</form>
			<h2>if else statement</h2>
			<form>
				<input type="number" name="caleb" value="enter your number">
				<br>
				<button type="submit" class="btn btn-info">submit</button>
			</form>
			<?php
			$vita=$_GET['caleb'];
			if ($vita<30) {
 	# code...
				echo "mercy";
			} else {
				echo "eddy";
			}

			?>
			<br>
			<br>
			<?php
			$cockpit=40;
			if ($cockpit<30) {
	# code...
				echo "you will just get";
			} else {
				echo "pilot";
			} 


			?>
			<span class="glyphicon glyphicon-heart"></span>
			<h3>elseif statement</h3>
			<form>
				<form method="$_GET"><input type="number" name="macm" required=""></form>
				<br>
				<button type="submit" class="btn-success"> <span class="glyphicon glyphicon-ok"></span>submit</button>




			</form>
			<?php
			$dud=$_GET["macm"];
			if ($dud==20) {
	# code...
				echo "gud";
			}elseif ($dud>30) {
	# code...
				echo "marry quickly";
			}elseif ($dud<30) {
	# code...
				echo "don`t marry plz";
			}

			?>
			<form method="$_GET">
				password:
				<input type="password" name="password" placeholder="enter the password"><br><br>
				confirm password:
				<input type="password" name="confirm password" placeholder="confirm here">

				<button class="btn-danger" type="submit"><span class="glyphicon glyphicon-ok"></span> submit</button>

			</form>
			<?php
			if (strlen($_GET)<7) {
	# code...
				echo "maximum of seven characters";
			} else {
				echo "";
			}

			if (is_string('password')) {
	# code...
				echo "wrong input";
			} else {
				echo "";
			}

			?>
			<?php

			$charles=$_GET['password'];
			$beni=$_GET['confirm password'];
			if ($charles===$beni) {
	# code...
				echo "";
			} else {
				echo "password mismatch";
			}


			?>
		</div>
	</div>
</body>
</html>