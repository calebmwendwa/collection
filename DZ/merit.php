<!DOCTYPE html>
<html>
<head>
	<title>Merit List</title>
	<style type="text/css">
		body{background-image: url(avengers-wallpaper-10711483.jpg);
			background-repeat: no-repeat; background-size: 100%;
			p: white;}

	</style>
</head>
<body>

<form method="GET">
	<input type="number" name="grade">
	<button>Submito!</button>
</form>
<?php 
if (isset($_GET['grade'])) {
	# code...
	$grade=$_GET['grade'];
}
if ($grade>80) {
	# code...
	echo "A";
	}

	else if ($grade>74) {
		# code...
		echo "A-";
	}
	else if ($grade>66) {
		# code...
		echo "B+";
	}
	else if ($grade>60) {
		# code...
		echo "B";
	}
	else {
		# code...
		echo "poor and repeat!";}

 ?>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><hr>
 <fieldset>
 	<legend>UserFeedback</legend>
 	<form>
 		<input type="text" name="UserFeedback">
 		<button> peana feedback</button>
 	</form>
 </fieldset>
 <?php 
$name=$_GET['UserFeedback'];
echo $name;

  ?>
  <?php 
$denzel="vanilla";
switch ($denzel) {
	case 'peach':
		# code...
	echo "vanilla is an epic flavour and i looooove it!!";
		break;
	
	default:
		# code...
	echo "Blueberries and Caramel only!!";
		break;
}
echo "<br>";
$purity=array("Golf","Mark X","Ford","porshe");
sort($purity);
   ?>
   <?php 
for ($i=1; $i <=5 ; $i++) { 
	for ($b=1; $b <=$i ; $b++) { 
		echo "*";
		if ($b<$i) {
			echo "<br/>";
			
		}
	
}
}
    ?>
</body>
</html>