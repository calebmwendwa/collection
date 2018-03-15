<!DOCTYPE html>
<html>
<head>
	<title>BodyMassIndex</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron">
  <h1>Body Mass Index (BMI)</h1>      
  <p>The below BMI calculator is up to date and recommended by the World Health Orginasation(WHO). All this at the comfort of your palm. So just enter your your weight and height,,,</p>
</div>

<div class="container">
  <h2>Obesity Pictorials</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="fat.jpg" alt="Los Angeles" width="1200" height="200">
      </div>

      <div class="item">
        <img src="global.jpeg" alt="Chicago" width="1200" height="200">
      </div>
    
      <div class="item">
        <img src="prevent.jpg" alt="New york" width="1200" height="200">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
  <h2>BMI Calculation Input form</h2>

  <form method="GET">
    <input type="body weight" name="body weight" placeholder="body weight">
     <input type="body height" name="body height" placeholder="body height">
  
    <button type="submit">Submit</button>
  </form>
</div>
<?php
$weight=$_GET['body weight'];
$height=$_GET['body height'];
$heights=$height * $height;
$bmi=$weight / $heights;
echo $bmi;

?>


</body>
</html>