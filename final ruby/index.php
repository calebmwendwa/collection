<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="text" name="names" placeholder="names"><br><br>
		<input type="submit" name="submit" value="UploadImage">
	</form>
	<?php
	$ruby=mysqli_connect('localhost','root','','ruby');
	$edy=mysqli_query($ruby,"SELECT * FROM final");
	while($row=mysqli_fetch_assoc($edy)) {

		extract($row);
		echo "$user";
		echo "<img src='$path'>";
	}
	?>
	<img src='$path'>;
</body>
</html>