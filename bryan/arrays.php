<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1{font-family: aakar
			color:blue;}
	</style>
</head>
<body>
<?php
$victor="<h1>My class has</h1>";
$scala=array("brayn","victor","samm","doreen","lali","allelah");
echo $victor . $scala[0];
echo "<br>";
rsort($scala);
$student=count($scala);
for ($i=0; $i <$student ; $i++) { 
	# code...
	echo "$scala[$i]";
	echo "<br>";
}
?>
<br>
<h1>associative arrays</h1>
<?php
$victorbryan=array("victor" => "20","brayn" => "16")
echo "my name is victor and i am" . $victorbryan['victor'] . "and i sit next to bryan who is " . $victorbryan['bryan'];
echo "<br>";
asort($victorbryan);
foreeach ($victorbryan as $key => $value)
{
	#code...
	echo "jina ni" . $key. "i am" $value;
	echo "<br>";
}




?>
</body>
</html>