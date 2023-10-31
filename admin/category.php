<html>
<head>
	<title>parlour</title>
	<link rel = "stylesheet" href = "style.css">

	
</head>
<body>
<?php
include("header.php");
?>
	<h1 class="head">Category</h1>
	<form method="POST" action="categorypro.php" enctype="multipart/form-data">
	
		<!-- <h1 align="center">Enter category</h1> -->
		 		<br>
		<center><table  class="tabcat">
		

		<tr>
				<td class="f1"><h2>Enter category:</h2></td>
				
				 <td class="fa1"><input type="text" name="category"  placeholder="Enter Category Hear" required size=40>
					 <!-- <select  name="category" class="ddm">
						<option  value="hair">Hair
						<option value="face">Skin
						<option value="skin">Face
					</select>  -->
				</td>
		</tr>
	
				<tr><td class="f1"><h2>Choose Photo:</h2></td>
				<td class="fa1"><input type="file" name="photo" required size=30></td></tr>
		</tr><tr></tr><tr></tr>

		<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" class="sub">
		</tr><tr></tr><tr></tr>

		</table></center>
		<!-- </td>
		</tr>
		</table> -->
		</form>
		</td>
		</table>

</div>
</table>	
</body>
</html>

<?php
	include("dbconfig.php");

	$q = mysqli_query($cn,"select * from category");

	
	echo "<center><table class='tab1'>"; 
	echo "<tr class='tabtr'>
			<td>ID</td>
			<td>Name</td>
			<td>Photo</td>
			<td>   </td>
			<td> </td>";
	while($r = mysqli_fetch_array($q))
	{
		
		echo "<tr class='tabtr2'>
		<td>".$r[0]."</td>
		<td>".$r[1]."</td>
		
		<td><img src='../upload/".$r[2]."' width='100px' height='100px'></td>
		<td><form method='POST' action='categorydel.php'>
			<input type='hidden' name='id' value=".$r[0].">
			<input type='submit' class='del' name='delete' value='Delete 🥛'>
		</form></td>
		<td><form method='POST' action='categoryupd.php'>
			<input type='hidden' name='id' value='".$r[0]."'>
			<input type='submit' class='del' name='update' value='Update 🔃'>
		</form></td></tr>";
			
	}
	echo "</table></center>";	

		// echo "<tr class='tabtr2'>";
		// echo "<td>".$r[0]."</td>";
		// echo "<td>".$r[1]."</td>";
		// echo "<td>";
		// echo "<img src='../upload/".$r[2]."' width='100px' height='100px'>";
		// echo "</td>";
		// echo "<td>";
		// echo "<form method='POST' action='categorydel.php'>";
		// echo "<input type='hidden' name='id' value='".$r[0]."'>";
		// echo "<input type='submit' class='del' name='delete' value='Delete🥛'>";
		// echo "</form>";
		// echo "</td>";
	
	
include("footer.php");

?>







