<!DOCTYPE html>
<html>
<head>
	<title>Fetch</title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		<?php 
		$conn=mysql_connect('localhost','root','','delete');
		$fetch=mysql_query($conn,"SELECT * FROM users");
		while ($row=mysql_fetch_assoc($fetch))
			#code...
			extract($row);
			echo"
			<tr> 
				<td>$id</td>
				<td>$username</td>
				<td><a href='delete.php?id=/$id>delete</td>
				</tr>" ;s
		 ?>
	</table>

</body>
</html>