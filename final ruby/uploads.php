<?php
$ruby=mysqli_connect('localhost','root','','ruby');
if (isset($_POST['names'])) {
	$target_dir="uploads/";
	$num=rand(20000,20000000);
	$target_file=$target_dir .$num .basename($_FILES['fileToUpload']['name']);
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)); {
		# code...
		extract($_POST);
		$cale="INSERT INTO `final`(`id`, `user`, `path`) VALUES (null, '$names','$target_file')";
		mysqli_query($ruby,$cale);
		echo "file has been uploaded" .basename($_FILES['fileToUpload']["name"]);
	} 
}
?>