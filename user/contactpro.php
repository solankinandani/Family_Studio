<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$city = $_POST['city'];

		$q=mysqli_query($cn,"select * from contactus where id='$mobile'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{
			$q=mysqli_query($cn,"INSERT INTO `contactus` (`id`, `name`, `mobile`, `email`, `city`) VALUES (NULL, '$name', '$mobile', '$email', '$city');");
			
		}	
		else
		{
			echo"<script>window.location='contact.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>