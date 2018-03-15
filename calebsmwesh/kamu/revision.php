<!DOCTYPE html>
<html>
<head>
	<title>revision class ruby</title>
</head>
<body>


	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<?php

	echo "Caleb";


	$x=18;
	echo "$x";
	$y=10;
	$c=$x%$y;
	if ($c<5 && $c>1) {
		# code...
		echo "True";
	}else{
		echo "false";
	}

	echo "<br>";
	if($c<9 || $c>5){
		echo "okay";
	}else{
		echo "noo";
	}


	?>



	<form class="jumbotron">


		<input type="text" name="win">
		<button>press to win</button>
		</form>
		
<?php



$seven="win";
switch ($seven) {
	case 'win':
		# code...
	echo "winner";
		break;
		case '&three':
			# code...
		echo "loser";
			break;


	
	default:
		# code...
	echo "no winner";
		break;
}

?>


	<form method="GET">


		<input type="text" name="bet" value="place your bet(o-10)">
		<button>press to win</button>
		</form>



<?php


if (isset($_GET['bet'])) {
		# code...
		$bet=$_GET['bet'];
		if ($bet=1) {
			# code...
			echo "winner";
			switch ($bet) {
				case '2':
					# code...
				echo "good attempt";
					break;
					switch ($bet) {
				case '3':
					# code...
				echo "ulikaribia";
					break;
					switch ($bet) {
				case '4':
					# code...
				echo "nje";
					break;
					switch ($bet) {
				case '5':
					# code...
				echo "apana bana";
					break;
					switch ($bet) {
				case '6':
					# code...
				echo "mbali jo!";
					break;
					switch ($bet) {
				case '7':
					# code...
				echo "wahhh!";
					break;
					switch ($bet) {
				case '8':
					# code...
				echo "very bad";
					break;
					
				
				default:
					# code...
					break;
			}



?>

</body>
</html>