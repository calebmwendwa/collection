<!DOCTYPE html>
<html>
<head>
	<title><b>sign up</b></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-image: #pictures/shisha.jpg
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">victors </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="data.php">Home</a></li>
      <li><a href="signup.php">signup</a></li>
      <li><a href="home.php">Contacts</a></li>
    </ul>
  </div>
</nav>
<BR>
<br>
<br>
<form method="GET">
  <strong>Firstname</strong><br><input type="text" name="First Name" placeholder="First Name" class="form-control"  ><br> <strong>Notice:</strong> Undefined index: First Name<br> 
  <strong>Lastname</strong><br> <input type="text" name="Last Name" placeholder="Last Name" class="form-control" ><br>
 <strong>Email:<span class="glyphicon glyphicon-envelope"></span></strong><br><input type="text" name="E-mail" placeholder="E-mail address" class="form-control"><br>
 <strong>Phone#: <span class="glyphicon glyphicon-phone"></span></strong><br><input type="text" name=" Phone Number" placeholder="+2547-332-5469" class="form-control" r><br>
<strong>password:</strong><br><input type="password" name="psd" placeholder="Enter password"><br><br><br>
<button class="btn btn-info" type="send">Submit</button>
<button class="btn btn-success" type="send"><a href="home.php">login</a> 

</body>
</html>