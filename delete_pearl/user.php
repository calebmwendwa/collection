<!DOCTYPE html>
<html>
<head>
	<title>Fetching Data</title>
</head>
<body>
<table>
	<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
	</tr>
<?php 
$pearl=mysqli_connect('localhost','root','','deletepearl');
$fetch=mysqli_query($pearl,"SELECT * FROM users");
while ($riri=mysqli_fetch_assoc($fetch)) {
	# code...
	extract($riri);
	echo "
	<td>$id</td>
	<td>$username</td>
	<td><a href='delete.php?id=$id'>delete</a>
	</td>
	
	" ;

}

 ?>

</table>
</body>
</html>