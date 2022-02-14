<?php 
include 'conn.php';
$qr='select * from msapi';
$res=mysqli_query($con,$qr);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<table border="1">
		<h3>Registerd Users</h3>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Password</th>
		</tr>
	
			<?php while ($row=mysqli_fetch_assoc($res)) {
				?>
			
			<tr>
				<td><?php echo $row['Id'] ;?></td>
				<td><?php echo $row['Name'] ;?></td>
				<td><?php echo $row['Email'] ;?></td>
				<td><?php echo $row['Mobile'] ;?></td>
				<td><?php echo $row['Password'] ;?></td>
			</tr>
			<?php

			}?>



</table>


</body>
</html>