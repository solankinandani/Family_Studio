<?php
	include("dbconfig.php");
	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		$q = mysqli_query($cn,"delete from city where id='$id'");
		echo "<script>window.location='city.php';</script>";
	}
	else
	{	
		echo "<script>alert('Illegal Operation...');</script>";
		echo "<script>window.location='city.php';</script>"	;		
	}
?>