<!DOCTYPE html>
<html>
<head>
	<title>BMI calculator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{background-image: url(Beach-wallpaper-9056157.jpg); background-size: 100%; background-repeat: no-repeat;}
	h1{color: white}
</style>
<body>
	<div class="container">
  <div class="jumbotron">
  	<h1>BMI Calculator Bitch</h1>
    <p>BMI Calculator is supposed to help one to calculate ur weight with ur height.</p>
  </div>
  <p>This is some text.</p>
  <p>This is another text.</p>
</div>
	<h1>BMI Calculator Bitch</h1>
	<form method="GET">
		<input type="number" name="weight1" placeholder=" number1">
		<select name="operator">
			<option value="add">+</option>
			<option value="subtract">-</option>

		</select>
		<input type="number" name="weight2" placeholder="number2"><br>
		<button>submito!</button>

	</form>
<?php 
if ( ! empty($_GET['weight1']) && ! empty($_GET['weight2'])) {
	if ($_GET['operator']=='add'){
		$number1=$_GET['weight1'];
		$number2=$_GET['weight2'];
		$complete=$number1+$number2;
		echo $complete;
	}
	
}













echo "<br>";

if ($complete>120) {
	# code...
	echo "Manono";
	}

	else if ($complete>80) {
		# code...
		echo "Chunga Sasa";
	}
	else if ($complete>60) {
		# code...
		echo "Hapo Sasa";
	}
	else if ($complete>50) {
		# code...
		echo "Uko tuh!";
	}
	else if ($complete>40) {
		# code...
		echo "Ongeza killo msee";}



	else {
		# code...
		echo "yow Man you need to Work Out!!";}

 ?>	
<?php 
$eee=2;
while ( $eee<= 10) {
	# code...
	echo $eee;
	echo "<br>";
	$eee++;
}

 ?>
<?php 
for ($i=0; $i <100 ; $i++) { 
	# code...
		echo "$i<br>";
}

 ?>

</body>
</html>