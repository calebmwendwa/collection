<!DOCTYPE html>
<html lang="en">
<head>
  <title>bryans medics</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<style type="text/css">
/* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

  <div class="col-md-4 col-sm-4 col-xl-12" ></div>
  <div class="col-md-9 col-sm-8 col-xl-12" ></div>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="hospital.jpg" alt="logo" style="width:60px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="hos.php">in patients</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">patients</a>
    </li>
   .

  </ul>
</nav>

<div class="container-fluid">
</div>

<div class="container">
  <div class="jumbotron">
    <h1 align="center">BRYAN MEDICS</h1>      
    <p>At Bryan Medics we offer world class health care services. Thanks to our state of art facilities and highly qualified personell. We have a reputable history and reputatio n for being in the industry for a decade now. Plus the introduction of the NHIF,the government has help us bring closer to each and every sundry affordable and realiable health care.</p>
  </div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="container">
  <h2 align="center">log in form</h2>
  <form method="post" action="register.php">
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <br>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <br>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <br>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</div>

<div class="col-sm-6">
  <h2 align="center">sign up form</h2>
 <form method="post" action="login.php">
  
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <br>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <br>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <br>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form> 

</div> 
</div>

</div>
</body>
</html>
