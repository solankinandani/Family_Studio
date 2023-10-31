<?php
	include("header.php");

	include("dbconfig.php");
	$q = mysqli_query($cn,"select * from category");
	echo "<table border=1>"; 
	echo "<tr><td><b>Id</td><td><b>Name</td><td><b>Photo</td>";
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><td>".$r[0]."</td><td>".$r[1]."</td><td><img src='../upload/".$r[2]."' width='100px' height='100px'></td>";
	}
	echo "</table>";
	
	include("footer.php");
?>




