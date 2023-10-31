<?php
	include("dbconfig.php");
	include("header.php");

	

?>
<h1 class="head"> Update SubCategory</h1>
<center><table class="tabcat">
		

		
	
				

<?php
	$id=$_POST['id'];
	
	$q=mysqli_query($cn,"select * from subcategory where id='$id'");
	echo "<form method='POST' action='subcategoryupdpro.php'>";
	while($r=mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">";

		echo "<tr><td class='f1'><h2>Enter Subcategory:</h2></td>";
		echo "<td class='fa1'><input type='text' name='name'  value=".$r[1]."></td></tr>";


		echo "<tr><td class='f1' ><h2>Choose Photo:</h2> </td>";
		echo "<td class='fa1'><input type='file' name='photo' required size='30'  value=".$r[2]." ></td></tr>";
	
	
	}
	echo "<tr><td></td><td><input type='submit' class='del' name='submit' value='Update'></td></tr>";
?>
</table></center>
<?php
	include("footer.php");
?>