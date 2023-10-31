<html>
<head>
	<title>parlour</title>

	<link rel = "stylesheet" href = "style.css">
</head>
<body>
<?php
include("header.php");
?>
	<h1 class="head">Subcategory</h1>
	<form method="POST" action="subcategorypro.php" enctype="multipart/form-data">
	<!-- <table >
	<tr>  
	<td class="f1">-->
	<!-- <h1>Enter subcategory</h1> -->
		 		<br>
		<center><table class="tabcat">

		<tr>
				
				<td class="f1"><h2>Enter subcategory:</h2></td>
				<!-- <td><input type="text" name="subcategory" placeholder="Enter subcategory Hear" required size=30></td></tr> -->
				<td class="fa1"><input type="text" name="subcategory" class="ddm" placeholder="Enter subcategory Hear" required size=40>
				<!-- <select  name="subcategory" class="ddm">
						<option value="hair">Hair
						<option value="face">Face
						<option  value="skin">Skin
					</select> -->
				</td>
<tr>
				<td class="f1"><h2>Choose Photo:</h2></td>
				<td class="fa1"><input type="file" name="photo" required size=30></td></tr>
		</tr><tr></tr><tr></tr>

		<tr>
				<td colspan="2"><center><input type="submit" name="submit" value="Submit" class="sub"></center>
		</tr><tr></tr><tr></tr>

		</table></center>
	
		</form>
		

</div>
</table>	
</body>
</html>

<?php
	include("dbconfig.php");

	$q = mysqli_query($cn,"select * from subcategory");

	echo "<center><table class='tab1'>"; 
	echo "<tr class='tabtr'>
			<td>ID</td>
			<td>Name</td>
			<td>Photo</td>
			<td></td>";
	while($r = mysqli_fetch_array($q))
	{

		echo "<tr class='tabtr2'>
		<td>".$r[0]."</td>
		<td>".$r[1]."</td>
		
		<td><img src='../upload/".$r[2]."' width='100px' height='100px'></td>
		<td><form method='POST' action='subcategorydel.php'>
			<input type='hidden' name='id' value=".$r[0].">
			<input type='submit' class='del' name='delete' value='Delete 🥛'>
		</form></td>
		<td><form method='POST' action='subcategoryupd.php'>
			<input type='hidden' name='id' value='".$r[0]."'>
			<input type='submit' class='del' name='update' value='Update 🔃'>
		</form></td></tr>";

		
		
	}
	echo "</table></center>";	


	include("footer.php");
?>






