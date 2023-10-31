
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "style.css">
	<title>Document</title>
	
</head>
<body>
	
</body>
</html>

<?php
	include("header.php");
	include("dbconfig.php");
	
	echo "<h1 class='head'>Client<h1>";

	$q = mysqli_query($cn,"select * from registration");
	echo "<center><table class='tab1'>"; 
	echo "<tr class='tabtr'>
			<td><b>Id</td>
			<td><b>Name</td>
			<td><b>Mobile</td>
			<td><b>Email</td>
			<td><b>Password</td>
			<td><b>City</td>
			<td></td>
			<td></td>
		</tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='tabtr2'><td>".$r[0]."</td>
		<td>".$r[1]."</td>
		<td>".$r[2]."</td>
		<td>".$r[3]."</td>
		<td>".$r[4]."</td>
		<td>".$r[5]."</td>
		<td><form method='POST' action='clientdel.php'>
			<input type='hidden' name='id' value=".$r[0].">
			<input type='submit' class='del' name='delete' value='Delete 🥛'>
		</form></td>
		<td><form method='POST' action='clientupd.php'>
			<input type='hidden' name='id' value='".$r[0]."'>
			<input type='submit' class='del' name='update' value='Update 🔃'>
		</form></td></tr>";
	}
	echo "</table></center>";
	
	include("footer.php");
?>




