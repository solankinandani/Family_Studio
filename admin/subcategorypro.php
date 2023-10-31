<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$subcategory = $_POST['subcategory'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);
		
		$q=mysqli_query($cn,"SELECT * FROM subcategory where name ='".$subcategory."'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO subcategory (name, photo) VALUES ('$subcategory','$photo')");
		}	
		else
		{
			echo"<script>alert('subcategory Already Registered')</script>";
			echo"<script>window.location='subcategory.php'</script>";
		}
	}
	echo"<script>window.location='subcategory.php'</script>";
?>



