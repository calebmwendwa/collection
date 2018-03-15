<?php
			if (isset($_POST['username'])){

				$conn=mysql_connect('localhost','root','','deleteupdate');

			if (!$conn) {

				echo "failed to connect to database";
			}else {
				extract($_POST);

				$insertme="INSERT INTO `users`(`id`,`username`,`password`) VALUES (NULL,$$username`,`$password`)";
				
				$me=mysql_query($conn,$insertme);
				if ($me) {
					echo "Saved successfully";
				}
			}
		}
		?>