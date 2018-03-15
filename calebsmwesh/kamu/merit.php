<!DOCTYPE html>
<html>
<head>
	<title>class ruby</title>
</head>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><hr>
	<?php
	$joshua=17.98;
	$caleb=12;
	$sam="sam mulwa";

	$mwesh=$joshua*$caleb;
	echo $mwesh;
	echo "<br>";
	var_dump($mwesh);
	if ($mwesh<=215.76) {
		# code...
		echo "too much";
	}else{

		echo "too small";
	}








	?><form method="GET">

		<input type="number" name="grade">
		<button>submit</button>








	</form>
	<?php 

	if (isset($_GET['grade'])) {//this will display the grade.
		# code...
		$grade=$_GET['grade'];
		if ($grade<=40) {
			# code...
			echo "loser";
		} else{
			echo "champion";
		}if ($grade>=80) {
			# code...
			echo "A";
		}elseif ($grade>=71) {
			# code...
			echo "A-";
		}elseif ($grade>=60) {

			echo "B+";
		}elseif ($grade>=51) {
			# code...
			echo "B";
		}elseif ($grade<51) {
			# code...
			echo "fail";
		}

		
	}
$eric="sharon";
switch ($eric) {
	case 'sharon':
		# code...
	echo "get out of here";
		break;
		case 'sharon':
			# code...
		echo "get out of here";
			break;
	
	default:
		# code...
	echo "mercy wants you";
		break;

}



	?><form>
		<input type="text" name="grade">
		<button>submit</button>


	</form>
<?php

echo ucwords("grade grade grade grade grade grade grade grade grade grade grade grade grade grade grade grade grade")


?>
</body>
</html>