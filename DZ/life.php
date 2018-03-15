<!DOCTYPE html>
<html>
<head>
	<title>forme</title>
</head>
<body>
	<form method="GET">
  <strong>First Name</strong><br><input type="text" name="First Name" placeholder="First Name" class="form-control"  ><br> <strong>Notice:</strong> Undefined index: First Name<br> 
  <strong>Last Name</strong><br> <input type="text" name="Last Name" placeholder="Last Name" class="form-control" ><br>
 <strong>Email:<span class="glyphicon glyphicon-envelope"></span></strong><br><input type="text" name="E-mail" placeholder="E-mail address" class="form-control"><br>
 <strong>Phone#: <span class="glyphicon glyphicon-phone"></span></strong><br><input type="text" name=" Phone Number" placeholder="+2547-332-5469" class="form-control" r><br>
 <button class="btn btn-info" type="send">Submit</button>
<button class="btn btn-success" type="send">Reset</button>
<strong>password:</strong><br><input type="password" name="psd" placeholder="Enter password"><br><br>
</form>
<?php
$val=$_GET['psd'];
if (strlen($val)<10) {
  # code...
  echo "Short Man!!";
}
else{ echo "";

}

 ?>
 <?php 
$ss=23;
while ($ss <= 50) {
	# code...
	echo "rudiaaaa $ss";
}


  ?>
</body>
</html>