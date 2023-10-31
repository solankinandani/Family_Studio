<?php
	if(isset($_POST['delete']))
	{
		include("dbconfig.php");
		$id = $_POST['id'];
		$q = mysqli_query($cn,"delete from subcategory where id='$id'");
		echo "<script>window.location='subcategory.php';</script>";
	}
	else
	{	
		echo "<script>alert('illlegal Operation...');</script>";
		echo "<script>window.location='subcategory.php';</script>"	;		
	}
?>