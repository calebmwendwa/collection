<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		select Image to Upload
		<input type="file" name="fileToUpload" id="fileToUpload"><br>
		<input type="text" name="names" placeholder="Names">
		<input type="submit" name="submit" value="UploadImage">
		
	</form>

	<?php 
	$lolo=mysql_connect('localhost','root','','final scala');
	$results=mysql_query($lolo,"SELECT *FROM lolo");

	while($row=mysql_fetch_assoc($result)) {
		#code...
		extract($row);
		echo "$names";
		echo "<img src='$path'>;
	 ?>
	}

</body>
</html>