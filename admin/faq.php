<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	
</body>
</html>
<?php


include("header.php");
include("dbconfig.php");

echo "<h1 class='head'>Frequently Asked Question</h1>";

$q = mysqli_query($cn,"select * from faq");
	echo "<center><table class='tab1'>"; 
	echo "<tr class='tabtr'><td>ID</td><td>Name</td><td>Mobile</td><td>Question</td><td></td></tr>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='tabtr2'><td>".$r[0]."</td><td>".$r[1]."</td><td>".$r[2]."</td><td>".$r[3]."</td><td><form method='POST' action='faqdel.php'><input type='hidden' name='id' value=".$r[0]."><input type='submit' name='delete' class='del' value='Delete🥛'></form></td>";
	}
	echo "</table></center>";
	

include("footer.php");
?>





