<?php 
$den=mysqli_connect('localhost','root','','final');
if (isset($_POST['names'])) {
	$target_dir="uploads/";
	$num=rand(2000,2000000);
	$target_file=$target_dir .$num. basename($_FILES['filetoupload']['name']);
	if (move_uploaded_file($_FILES['filetoupload']['tmp_name'], $target_file)) {
		# code...
		extract($_POST);
		$sql="INSERT INTO `perl`(`id`, `names`, `path`) VALUES (null,'$names','target_file')";
		msqli_query($den,$sql);
		echo "File Uploaded";
	
	}
	# code...
	else{
		echo "Failed to Upload";
	}
}

 ?>