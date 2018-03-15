<!DOCTYPE html>
<html>
<head>
	<title>sam monday</title>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 align="center">CONNECTING PHP</h1>      
			<p>Its on a monday monin and am connection php to mysql.. Waaoh.. i dont know if it work.</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6">
		<div class="container">
  <h2>Lin in here</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
	
		</div>
	</div>
		<hr>
		<?php 
		$servername="localhost";
		$password="";
		$db="sam";
		$user="root";

		$conn=mysqli_connect($servername,$user,$password,$db);

		if (!$conn) {
			die("connection failed" .
				mysqli_connect_error());
			# code...
		}
		echo "connection successful";





		?>

	</body>
	</html>
