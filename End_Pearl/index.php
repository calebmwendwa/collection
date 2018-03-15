<!DOCTYPE html>
<html>
<head>
	<title>Uploadme</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="upload.php">
		<input type="file" name="filetoupload" id="filetoupload">
		<input type="text" name="names" placeholder="Names">
		<input type="submit" name="submit" value="UploadImage">



	</form>
<?php 
$den=mysqli_connect('localhost','root','','final');
$pur=mysqli_query($den,"SELECT * FROM perl");
while ($l=mysqli_fetch_assoc($pur)){
	extract($l);
	echo "$names";
	echo "<img scr='$path'>";
}


 ?>
</body>
</html>