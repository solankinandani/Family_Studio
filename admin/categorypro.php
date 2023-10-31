<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$category = $_POST['category'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);
		
		$q=mysqli_query($cn,"SELECT * FROM category where name ='$category'");
		$r=mysqli_num_rows($q);
		if($r>0)
		{
			echo"<script>alert('Specialist Already Registered')</script>";
			echo"<script>window.location='category.php'</script>";
			
		}	
		else
		{
			$q=mysqli_query($cn,"INSERT INTO category(name, photo)VALUES('$category', '$photo')");
		}
	}
	echo"<script>window.location='category.php'</script>";
?>



