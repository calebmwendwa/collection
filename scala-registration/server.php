<?php 
		session_start();
		$username="";
		$email="";
		$error=array();

		$bd=mysql_connect('localhost','root','','registrationscala');
		$username=mysql_real_escape_string($bd,$_POST['Username']);
		$username=mysql_real_escape_string($bd,$_POST['Email']);
		$username=mysql_real_escape_string($bd,$_POST['pass']);
		//form validation
		if (empty($username)) {
			# code...
		}


 ?>