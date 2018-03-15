<!DOCTYPE html>
<html>
<head>
	<title>my first php page</title>
</head>
<body>
	<h1 align="center"><u>php in the making</u></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php
echo"class scala<br>";


$bryan=19;
while ( $bryan<= 30) {
	# code...
	echo "the answer is $bryan<br>";
	$bryan++;
}
$allelah=array("vitz", "probox","lexus", "bima", "benz", "harrier", "lambo", "ferrari", "mazda", "kia", "tesla");
echo "allelah is selling ". $allelah[0].",".$allelah[1].",".$allelah[2].",".$allelah[3].",".$allelah[4].",".$allelah[5].",".$allelah[6].",".$allelah[7]." and ".$allelah[8].".";
echo "<br>";
sort($allelah);
$cars=count($allelah);
for ($j=0; $j <$allelah ; $j++) { 
	echo $allelah[$j];
	echo "<br>";
	# code... 
}

for ($i=0 ; $i < 20 ; $i++ ) { 
	# code...
	echo "our value is $i<br>";
}
?>
</body>
</html>

 