
<?php
	include("dbconfig.php");

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$city = $_POST['city'];
		// $photo = $_FILES['photo']['name'];
		// move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$_FILES['photo']['name']);

		$q=mysqli_query($cn,"select * from registration where mobile='$mobile'");
		$r=mysqli_num_rows($q);
		if($r==0)
		{	
			$q=mysqli_query($cn,"INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`, `city`, `type`) VALUES (NULL, '$name', '$mobile', '$email', '$pass', '$city', 'user');");
			echo"<script>alert('Record Insert Sucessfully')</script>";	
		}	
		else
		{			
			echo"<script>alert('User Already Registered')</script>";		
			//echo"<script>window.location='registration.php'</script>";
		}
	}
	//echo"<script>window.location='index.php'</script>";
?>