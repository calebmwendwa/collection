<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body{background-image: url(african-american-woman-doctor-child-women-isolated-31173781.jpg);background-repeat: no-repeat;background-size: 120%;
  }
  #lala{position: center;}
</style>
</head>
<body>
  <div class="header">
  	<h2>Login:</h2>
  </div>
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <br>
       <input type="radio" name="person" value="Fever" checked>Patient<br><br>
  <input type="radio" name="person" value="Shivering">Doctor

  <br><br>
    <div class="input-group">
      <button type="submit" class="btn" id="lala" name="login_user"><a href="Teka'sHome.php">Login</a></button>
    </div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>