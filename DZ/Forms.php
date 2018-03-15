<!DOCTYPE html>
<html>
<head>
	<title>Form on PH freeekin'P_!!</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron"> 
<h1>Forms Sasa</h1>

</div>
<table align="left" border="1" cellpadding="7" cellspacing="0">
<?php  
for($i=1;$i<=7;$i++)
{
echo "<tr>";
for ($j=1;$j<=9;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>"; 
  }
  echo "<br>";
  ?>

</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
<form method="GET">
	<strong>First Name</strong><br><input type="text" name="First Name" placeholder="First Name" class="form-control" required="" ><br> <strong>Notice:</strong> Undefined index: First Name<br> 
  <strong>Last Name</strong><br> <input type="text" name="Last Name" placeholder="Last Name" class="form-control" required=""><br>
 <strong>Email:<span class="glyphicon glyphicon-envelope"></span></strong><br><input type="text" name="E-mail" placeholder="E-mail address" class="form-control" required=""><br>
 <strong>Phone#: <span class="glyphicon glyphicon-phone"></span></strong><br><input type="text" name=" Phone Number" placeholder="+2547-332-5469" class="form-control" required=""><br>
 <strong>Address:</strong><br><input type="text" name="Address" placeholder="Home Address" class="form-control" required=""><br><strong>
 <strong>City:</strong><br> <input type="text" name="City" placeholder="City"><br><br>
 <strong>State:</strong><br><select size="1">
    <option value="Kenya">Kenya</option>
    <option value="Uganda">Uganda</option>
    <option value="Tanzania">Tanzania</option>
    <option value="Burundi">Burudi</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Zanzibar">Zanzibar</option>
        <option value="Botswana">Botswana</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Zambia">Zambia</option>
</select><br><br>

<strong>password:</strong><br><input type="password" name="password1" placeholder="Enter password"><br><br>

<strong>confirm password:</strong><br><input type="password" name="password" placeholder="Enter password again"><br><br>

</form>
 <button class="btn btn-info" type="send">Submit</button>
<button class="btn btn-success" type="send">Reset</button>
</div>
<?php 
$denzel= $_GET['First Name'];
if (strlen($denzel)<6) {
  echo "Too Short";
  # code...
}
  else{
    echo "Correct";
  
}

if (is_string($denzel)) {
  # code...
  echo "Use other Documents";
}
echo "<br>";
if (!isset($denzel)) {
  # code...
  echo "Shida Mbilli";
}
$denzel=$_GET['password1'];
$bb=$_GET['password'];
echo "<br>";
if ($denzel!==$bb) {
  # code...
  echo "Error!!";
}


 ?><br><br>
<blockquote>ree al last</blockquote>
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
</body>
</html>