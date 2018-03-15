	 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<form>
	
<input type="text" name="person">

<button>submit</button>

</form>

	<?php


 	echo "class ruby <br>";
 	$x=20;
 	$y=10;
 	echo $x+$y;




 	$y=12.345;
 	echo "<br>";
 	

 	echo strlen("caleb mwendwa");
 	echo "<br>";
 	echo str_word_count("caleb mwendwa musembi");
 	echo strrev("caleb mwendwa musembi");
 	echo "<br>";
 	echo strpos ("my name is caleb mwendwa and i love my county", "caleb");

 	$name=$_GET['person'];//this will parse the name person from the input field.
 	echo $name."and this is my content";/*yourmultiple line comment
 	what if i told*/
 	echo"<br>";

 	$caleb=19;
 	if ($caleb<=30) {
 		# code...
 		echo "Too young";
 	}else{

 		echo "Old man";
 	}

 	if ($caleb<15) {
 		# code...
 		echo "jaber";

 	}elseif ($caleb<15) {
 		# code...
 		echo "mvulana mzuri";
 	}
 	else{

 		echo "Brabrabra";
 	}

echo ucwords("caleb caleb caleb caleb caleb caleb caleb caleb");

echo "<br>";

echo ucwords("caleb                      caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb caleb");




 	?>
 </body>
 </html>












 