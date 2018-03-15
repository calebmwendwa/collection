<!DOCTYPE html>
<html>
<head>
	<title>functions</title>
	<style type="text/css">
		p{
			background-color:blue; 
		}

		
	</style>
	<meta charset="utf-8">
	<meta name="" content="">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>user defined functions</h1>
			<p>what is a funtion?<q>this referes to a block of statements that can be used repetitively in program/code but will not be executed unless called.</q></p>
			<?php
			function caleb(){

				echo "caleb is in class ruby";
			}
			caleb();

			?>
			<div class="well well-lg">
				<b><h2>using arguments in user defined functions</h2></b>
				<p>arguments are more like variables only that they are specified after a funtion anme and within a parenthesis</p>
			<?php
			function mac($multi){
			$ans=$multi*30;
			echo "$ans";

			}
			mac(12);

			?>
			<?php
			function mwesh(){

				echo "this is class ruby";
			}
			mwesh();
			?>
			<div class="jumbotron">
				<h3>return</h3>
				<p>it will stop the function execution before sending the value back to the calling funtion</p>

				<?php

				function _arg($num1,$num2,$num3){

					$answer=$num1*$num2+$num3;
					return $answer;
				}
				echo _arg(4,2,8);
				?>
				<h4>test return</h4>
				<?php
				function cabo($cabo1,$cabo2,$cabo3){
					$red=$cabo1/$cabo2*$cabo3;
					return $red;
				}
				echo cabo(10,2,5);
				?>
				<div class="jumbotron">
					<b><h4>default arguments</h4></b>
					
				<?php
				function defa($unita=22){
				echo "the sum is " . $unita;}
				defa(42);
				defa();

				?>

				</div>
			</div>

		</div>
	</div>
</body>
</html>