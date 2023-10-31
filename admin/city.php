

<html>
<?php
include("header.php");
?>
<head>
	<title>parlour</title>
	<link rel = "stylesheet" href = "style.css">
</head>
	
	
	
	<h1 class="head">City</h1>
	<form method="POST" action="citypro.php" >
	<table>
	<tr>
	<td colspan="2" align="center">
	<h1 align="center">Enter City</h1>
		 		<br>
		<table>

		<tr>
				<td align="Left"><h2>Enter City : </h2></td>
				<td align="left"><input type="text" name="name" placeholder="Enter Name Here" required size=30></td>
		</tr><tr></tr><tr></tr>

		<tr>
				<td></td>
				<td align="left"><input type="submit" name="submit" value="Submit">
		</tr><tr></tr><tr></tr>

		</table>
		</td>
		</tr>
		</table>
		</form>
		</td>
		</table>

	</div>
</table>	
</body>
</html>

<?php
	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from city");
	echo "<table border=1 align='center' >"; 

	echo "<tr><td>ID</td><td>Name</td><td>Delete🥛</td>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td><form method='POST' action='citydel.php'><input type='hidden' name='id' value='".$r[0]."'><input type='submit' name='delete' value='Delete 🥛'></form></td>";
	}
	echo "</table>";	


?>





