<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$question = $_POST['question'];

		$q=mysqli_query($cn,"select * from faq where id='$mobile'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{	
			$q=mysqli_query($cn,"INSERT INTO `faq` (`id`, `name`, `mobile`, `question`) VALUES (NULL, '$name', '$mobile', '$question');");
		}	
		else
		{	
			echo"<script>alert('User Already Registered')</script>";
			echo"<script>window.location='faq.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>