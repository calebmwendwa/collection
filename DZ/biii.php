<?php 
$relic="uploads/";
$filetarget=$relic .basename($_FILES["files"]{"name"});
if (isset($_POST["submit"])) {
	if (move_uploaded_file($_FILES["files"]["tmp_name"], $filetarget)) {
		# code...
		echo "My file name is" .basename($_FILES["files"]["name"]);
	} else{


	# code...
		echo "file not uploaded";}
}


 ?>