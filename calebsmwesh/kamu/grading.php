<!DOCTYPE html>
<html>
<head>
	<title>grading</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="jumbotron">
<h1>calculate the avarage here</h1>
	<form method="$_GET">
		sub1:
		<input type="number" name="sub1"><br>
		sub2:
		<input type="number" name="sub2"><br>
		sub3:
		<input type="number" name="sub3"><br>
		sub4:
		<input type="number" name="sub4"><br>
		sub5:
		<input type="number" name="sub5"><br>
		sub6:
		<input type="number" name="sub6"><br>
		sub7:
		<input type="number" name="sub7"><br>
		
		<?php
		$cale=$_GET['sub1'];
		$mwesh=$_GET['sub2'];
		$josh=$_GET['sub3'];
		$mac=$_GET['sub4'];
		$macm=$_GET['sub5'];
		$edy=$_GET['sub6'];
		$kamu=$_GET['sub7'];
		$n='7';
		$AVARAGE=($cale+$mwesh+$josh+$mac+$macm+$edy+$kamu)/$n;
		echo $AVARAGE;
		?>
		<br>
<button type="submit" class="btn-danger">submit</button>
<button type="reset" class="btn-danger">reset</button>

	</form>

<?php
define('ruby', "use your avarage above to know your grade exclude any decimal");
echo ruby;


?>


	<form method="$_GET">
		<input type="number" name="AVARAGE" value="input your avarege here">
		<button type="submit" class="btn-success">submit</button>
		<button type="reset" class="btn-danger">reset</button>
	</form>
	<?php 

	if (isset($_GET['AVARAGE'])) {//this will display the grade.
		# code...
		$AVARAGE=$_GET['AVARAGE'];
		if ($AVARAGE<=40) {
			# code...
			echo "loser";
		} else{
			echo "champion";
		}if ($AVARAGE>=80) {
			# code...
			echo "A";
		}elseif ($AVARAGE>=71) {
			# code...
			echo "A-";
		}elseif ($AVARAGE>=60) {

			echo "B+";
		}elseif ($AVARAGE>=55) {
			# code...
			echo "B";
		}elseif ($AVARAGE>=51) {
			# code...
			echo "B-";
		}

		
	}
	?>
</div>
</div>
</body>
</html>