<!DOCTYPE html>
<html>
<head>
	<title>arraysruby</title>\
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">

	p{

		background-color:grey;
		text:align centre;
		color:red;  
	}



</style>
</head>
<body>
	<h1>arrays my friend!!!!</h1>
	<div class="container fluid">

		<?php


		$ruby=array("caleb", "engineer",  "pilot", "hostel", "eddy", "mac m", "masii", "mombasa", "malindi", "amstardam", "london", "nigeria", "south africa", "swaziland", "ghana", "ethiopia", "sudan", "rwanda", "congo", "njoroge", "wanjau", "judy", "ben", "musembi");



		echo "my name is " .$ruby[5] ." and i sit next to " .$ruby[0];
		arsort($ruby);
		$cale=count($ruby);
		for ($i=0; $i < $cale; $i++) { 
	# code...
			echo $ruby[$i];
			echo "<br>";
		}



		?>
		<h2>associtave arrays my friend no joking!!!</h2><br><br>
		<div class="jumbotron">
			<p>this is basically an array that uses <b>named</b> keys that is assigned to them</p>
			<h3>for each explanation</h3>
			<b><p>for each loop is used only in arrays when one wants to loop through each kay or value in an array</p></b>
			<?php

			$macm=array("caleb"=>"20", "macm"=>"16", "eddy"=>"19");
			asort($macm);
			foreach ($macm as $key => $value) {
	# code...
				echo $key . $value;
				echo "<br>";
			}

			?>

		</div>
		<div class="well well-lg">
			<h4>logicl operators</h4>
			<p>these are operators that are used in the combination of conditional statements</p>
			<?php
			$x=30;
			$y=20;
			$c=$x+$y;

			if ($x>=50 xor $y<=50) {
				# code...
				echo "true";
			} else {
				# code...
				echo "false";
			}if ($c>=50 || $c<=50) {
				# code...
				echo "true";
			}elseif ($c>=50 && $c<=50) {
				# code...
				echo "false";
			}
			
			?>

		</div>
	</div>
</body>
</html>