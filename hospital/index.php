<!DOCTYPE html>
<html>
<head>

	<title>LoginPage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style type="text/css">
  	body{
  		background-image: url(heart.gif);
  		background-size: 70%;
  		background-repeat:;
  		margin:0;
  		padding: 0;
  		font-family: sans-serif; 

  	}
  	.loginBox{
  		position: absolute;
  		top: 50%;
  		left: 70%;
  		transform: translate(-50%,-50%);
  		width: 750px;
  		height: 800px;
  		padding: 80px 40px;
  		box-sizing: border-box;
  		background-color: #800080;}

      h3{
      margin: 0;
      padding: 0 0 20px;
      color: #000000;
      text-align: left;}


      </style>
</head>
<body>
  <div class="loginBox">
        <img src="black.jpg" width="680" height="300" class="user">
        <br><br><br><br><br>
        <h3><u>Brian Medics</u><br><br>Sign-in or Sign-up</h3>
        <form action="signings.php">
          <p>Sign-in</p>
          <a href="signings.php"">SING-IN</a> <br>
          <p>Sign-up</p>
          <a href="signings.php"">SING-UP</a>
          <br>
        </form>
        </div>   
    
</body>
</html>