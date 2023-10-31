<?php
	include("header.php");
?>
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
<table width=70% border=1 cellpadding="10">
	<tr>
		<th></th>
		<th></th>
		<th>Name</th>
		<th>Email</th>
		<th>UserName</th>
		<th>Type</th>
	</tr>
</table>
<?
<?php
	$q=mysqli_query($cn,"select * from register where utype='user'");
	while($r=mysqli_fetch_array($q))
	{
		echo "<tr><td><a href='delreg.php?id=".$r[0]."'>DELETE</a></td><td><a href='updreg.php?id=".$r[0]."'>UPDATE</a></td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[5]."</td></tr>";
	}
?>
<?php
	include("footer.php");
?>