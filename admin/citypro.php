<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$name = $_POST['name'];
		
		$q=mysqli_query($cn,"SELECT * FROM `city` where name='$name'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO `city` (`id`, `name`) VALUES (NULL, '$name');");
		}	
		else
		{
			echo"<script>alert('City Already Registered')</script>";
			echo"<script>window.location='city.php'</script>";
		}
	}
	echo"<script>window.location='city.php'</script>";
?>



