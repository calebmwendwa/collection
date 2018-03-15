<!DOCTYPE html>
<html>
<head>
	<title>revision</title>
	<meta charset="utf-8">
	<meta name="veiwport" content="width=device-width,initial-scale=1" >
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron-lg">
	<h2>For loops</h2>
<?php 
for ($i=0; $i <=10 ; ++$i) { 
	# code...
	echo $i;
	echo "<br>";
}

 ?>
<br>
<hr>
<h2>Nested for loops</h2>
<?php 
for ($i=0; $i <10 ; $i++) { 
	# code...
	for ($j=0; $j <$i ; $i++) { 
		# code...
		echo "///";
	}
}



 ?>

</div>
</body>
</html>