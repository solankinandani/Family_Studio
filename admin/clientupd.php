<?php
	include("dbconfig.php");
	include("header.php");

	echo "<h1>Update Client<h1>";

?>
<center><table class="tabcat">
<?php
	$id=$_POST['id'];
	//$cn=mysqli_connect("localhost","root","","parlour");
	$q=mysqli_query($cn,"select * from registration where id='$id'");
	echo "<form method='POST' action='clientupdpro.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";

		echo "<tr><td class='f1'>Name : </td>";
		echo "<td class='fa1'><input type='text' name='name' value=".$r[1]."></td></tr>";

		echo "<tr><td class='f1'>Mobile No: </td>";
		echo "<td class='fa1'><input type='text' name='mobile' value=".$r[2]."></td></tr>";

		echo "<tr><td class='f1'>Email : </td>";
		echo "<td class='fa1'><input type='email' name='email' value=".$r[3]."></td></tr>";

		echo "<tr><td class='f1'>Password : </td>";
		echo "<td class='fa1'><input type='password' name='password' value=".$r[4]."></td></tr>";

		echo "<tr><td class='f1'>City : </td>";
		echo "<td class='fa1'><input type='text' name='city' value=".$r[5]."></td></tr>";

		// echo "<tr><td>Photo : </td>";
		// echo "<td><input type='text' name='img' value=".$r[6]."></td></tr>";
	
	
	}
	echo "<tr><td></td><td><input type='submit' class='del' name='submit' value='Update'></td></tr>";
?>
</table></center>
<?php
	include("footer.php");
?>