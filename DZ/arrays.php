<!DOCTYPE html>
<html>
<head>
	<title>class Arrays</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{background-color: #4000008}




</style>
<body>
<div class="jumbotron">
	<h1>The Three Types of Arrays</h1>
	<ul>
		<li>Indexed Array</li>
		<li>Associative array</li>
		<li>Multidimensional array</li>

	</ul>

 
</div>
<h2>Associative Array.</h2>
<p><center>FOR EACH LOOOP!!!! This can only be used in an array when you want to loop through each key or value</center></p>
<?php  
$Purity= array("Denzel"=>"20", "Purity"=>"22", "Allela"=>"45", "Ruel"=>"59","Dennis"=>"32", "Stela"=>"23", "Enzo"=>"39", "Stacey"=>"12", "lexy"=>"45", "Brad"=>"15","Coogie"=>"22", "Adams"=>"45", "Ullexi"=>"49","Xiouvu"=>"28", "Esther"=>"25", "Ruby"=>"48");
ksort($Purity);
foreach ($Purity as $key => $value) {
	# code...
	echo "my name is " . $key. " and I am" .$value;
	echo "<br>";
}

?>
<?php 
$Enzo=array("Rolin"=>"15","Phoebe"=>"25","Rebecca"=>"20","Olive"=>"19","Ingrid"=>"36","Samantha"=>"23","Trevor"=>"18","Betty"=>"16","Aleq"=>"14","Colin"=>"26","Devinah"=>"46","Westly"=>"67","Woodell"=>"23","Emily"=>"56","Amandah"=>"33","Brendah"=>"66","Quavo"=>"28","Trixy"=>"46","Chanel"=>"23","Zeleq"=>"37");
arsort($Enzo);
foreach ($Enzo as $key => $value) {
	# code...
	echo "My name is " . $key. " and i am" .$value;
	echo "<br>";
}

 ?>
<h2>Indexed Arry and how to declare them.</h2>
<?php 
$wako=array("Denzo","Realo","Chae","Devinah","James","Onesmus","Vicky","Aleq","Telo","Lydia","Veronicah");
rsort($wako);
$ddd=count($wako);
for ($i=0; $i < $ddd ; $i++) { 
	# code...
	echo "$wako[$i]";
	echo "<br>";
}
 ?>
 <?php 
 $science=78;
 $socialS=67;
 echo "<br>";
if ($science>=75 && $socialS>=67) {
	echo "Do The Next Exam";
	# code...
	}elseif ($science<72 && $socialS>68) {
		echo "Rudia Examo";
		# code...
		}
		else{echo "Toka";
	}
+





  ?>


</body>
</html>