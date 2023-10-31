<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$feedback = $_POST['feedback'];
		$advice = $_POST['advice'];

		$q=mysqli_query($cn,"select * from feedback where id='$mobile'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO `feedback` (`id`, `name`, `mobile`, `email`, `comment`, `redio`, `advice`) VALUES (NULL, '$name', '$mobile', '$email', '$comment', '$feedback', '$advice');");
			
		}	
		else
		{
			echo"<script>window.location='feedback.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>