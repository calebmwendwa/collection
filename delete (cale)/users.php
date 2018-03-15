<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr border="2px solid black">
		<th>id</th>
		<th>username</th>
		<th>password</th>
	</tr>
<?php 

$ruby=mysqli_connect('localhost','root','','deleteme'); 
$fetch=mysqli_query($ruby,"SELECT * FROM users");
while ($row=mysqli_fetch_assoc($fetch)) {
	# code...
	extract($row);
	echo "
     <td>$id</td>
     <td>$username</td>
     <td><a href='delete.php?id=$id'>Delete</a></td>
	";
 }
?>

</table>
</body>
</html>