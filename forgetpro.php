<?php
    include('dbconfig.php');

    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

	
	$q = mysqli_query($cn,"select * from registration where mobile='$mobile'");

	$r=mysqli_fetch_array($q);

	if($r[2]==$mobile )
	{
		echo "<script>alert('password is  $r[4]')</script>";
		echo "<script>window.location='login.php'</script>";
		
	}
	
	else 
	{
		echo "<script>alert('Enter Correct  Password');</script>";
		echo "<script>window.location='forget.php'</script>";	
	}
?>