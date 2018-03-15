<!DOCTYPE html>
<html>
<head>
	<title>Student's data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fake SChool</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="kazishit.php">Home</a></li>
      <li><a href="#">signup</a></li>
      <li><a href="Student'sdata,php">Contact Details</a></li>
    </ul>
  </div>
</nav>
<form method="GET">
		<input type="number" name="sub1" placeholder="Maths">
		<select name="operator">
			<option value="add">+</option>
			<option value="subtract">-</option>

		</select>
		<input type="number" name="sub2" placeholder="English"><br>
		<button>submito!</button>
		<input type="number" name="sub3" placeholder="Kiswahili"><br>
		<button>submito!</button>
		<input type="number" name="sub4" placeholder="Bio"><br>
		<button>submito!</button>
		<input type="number" name="sub5" placeholder="Physics"><br>
		<button>submito!</button>
		<input type="number" name="sub6" placeholder="Chem"><br>
		<button>submito!</button>
		<input type="number" name="sub7" placeholder="History"><br>
		<button>submito!</button>

	</form>
<?php 
if ( ($_GET['sub1'])($_GET['sub2'])($_GET['sub3'])($_GET['sub4'])($_GET['sub5'])($_GET['sub6']) && ($_GET['sub']) 
		$Maths=$_GET['sub1'];
		$English=$_GET['sub2'];
		$Kiswahili=$_GET['sub3'];
		$Bio=$_GET['sub4'];
		$Physics=$_GET['sub5'];
		$Chem=$_GET['sub6'];
		$History=$_GET['sub7'];
		$tt='7';
		$complete=$sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$sub7;
		$avg=$complete/$tt;
		echo $complete;
		echo $avg;
	
	
}
echo "<br>";
if ($complete>80) {
	# code...
	echo "A";
	}

	else if ($complete>74) {
		# code...
		echo "A-";
	}
	else if ($complete>66) {
		# code...
		echo "B+";
	}
	else if ($complete>60) {
		# code...
		echo "B";
	}
	else {
		# code...
		echo "poor and repeat!";}
?>

</body>
</html>
	if ($_GET['operator']=='add'){