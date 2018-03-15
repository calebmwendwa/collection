<?php 
		if (isset($_POST['username']) {
			# code...
			// this is used to get the values passed from the user point
			$username=$_POST['username'];
			$password=$_POST['pass'];
			// addind this next line to help prevent mysql injection

			$username=stripcslashes($username);
			$password=stripcslashes($password);

			$username=mysql_real_escape_string($username);
			$password=mysql_real_escape_string($password);

			//connction to server and database

			mysql_connect("localhost","root","");
			mysql_select_db("sam");
			//querying your database

			$result=mysql_query("select * from scala where username='$username' and password='$password'") or die("connection failed" .
				mysql_connect_error(();
					//check username
				if ($row['username']==$username && $row]['password'] ) {
					echo "loginsuccessful" . $row['username'];
					# code...
				} else {
					echo "login failed";
		}




 ?>