<!DOCTYPE html>
<html>
<head>
	<title>reale ni Functions Day!</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
<div class="jumbotron">
	
	<h1>User Defined functions</h1>
	<p>What is a function?</p>
	<q>This refers to a block of statements that can be used to repetitively in a program/code but will not be executed unless called.</q>


<?php 
function Denzel(){
echo "Purity is a mad girl!!";

}
echo "<br>";
Denzel();

 ?>

</div>
<div class="well well-lg">
	<h3>Using arguements in user defined functions</h3>
<p>Arguments are more like variables only that they are specified after a function name and within a parenthesis.</p>
<?php 
function Biggie($angie,$Kuvira){
	echo "Sitting on a tree K I S S I N G!!! ". $angie. " and her".$Kuvira;
}
Biggie("Mwangi" ,18);


 ?>
 <h4>Test Return</h4>
<?php 
function Georgie($You,$Me,$I){
	$RED=98/52*45;
	echo "$RED";
}
Georgie("marinu", 86 ,78);


 ?>
</div>
<div class="jumbotron">
	<h3>Default Arguments</h3>
<?php 
function deedee($Eunice=36)
{
	echo $Eunice*9;

}
deedee();


 ?>


</div>
<div class="well well-lg">
	<h3>Return</h3>
	<?php 
	function Pearl($num1,$num2){
		$ans=$num1*$num2;
		return $ans;
	}
echo Pearl(3,67);
function Churchill($Get,$Take,$Carry){ 
$vee=$Get/$Take*$Carry;
return $vee;
}
echo Churchill(98,56,578);
	 ?>

</div>
</div>

</body>
</html>