<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$category = $_POST['category'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$q=mysqli_query($cn,"select * from bookapp where id='$mobile'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{	
			$q=mysqli_query($cn,"INSERT INTO `bookapp` (`id`, `name`, `email`, `mobile`, `category`, `date`, `time`) VALUES ('', '$name', '$email', '$mobile', '$category', '$date', '$time');");
	
		$cn = mysqli_connect("localhost","root","","parlour");
		
		$email=$_POST['email'];
	
		$q=mysqli_query($cn,"select * from bookapp where  email='$email'");
		$r=mysqli_fetch_row($q);
		if($r[2]==$email)
		{	
			
			$email = "$r[2]";
			$subject = "Booking Appointment";
			$body = "Hi, Your Booking Is Succesfully to Done .Welcome to Visit us ";
			$headers = "From:solankinandani453@gmail.com";

			if (mail($email, $subject, $body, $headers)) 
			{
				
			} 
		
		}
		
		}	
		else
		{	
			echo"<script>alert('User Already Booking ..')</script>";
			echo"<script>window.location='appointment.php'</script>";
		}
	}
	echo"<script>window.location='index.php'</script>";
?>