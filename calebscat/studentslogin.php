<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript"></script>
</head>
<body>
	<form method="$_POST" action="grading.php">
		firstname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="firstname" class="form-control" type="text" required=""><br>
		middlename:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="middlename" class="form-control" type="text" required=""><br>
		surname:<span class="glyphicon glyphicon-user"></span><br>
		<input type="text" name="surname" class="form-control" type="text" required=""><br>
		adm n.o:
		<input type="number" name="adm n.o"><br>
		<br>
		<button type="submit" class="btn-success">submit</button>
		<button type="reset" class="btn-danger">reset</button>

</body>
</html>