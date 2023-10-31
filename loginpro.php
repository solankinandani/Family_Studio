<?php
	
	
	$mobile = $_POST['mobile'];
	$pass = $_POST['pass'];

	include('dbconfig.php');
	$q = mysqli_query($cn,"select * from registration where mobile='$mobile' and password='$pass'");

	$r=mysqli_fetch_row($q);

	if($r[2]==$mobile && $r[4]==$pass && $r[6] =='user')
	{
		session_start();
		$_SESSION['username'] = $_POST['mobile'];
		echo "<script>window.location='user/index.php'</script>";
	}
	else if($r[2]==$mobile && $r[4]==$pass && $r[6] =='admin')
	{
		session_start();
		$_SESSION['adminname'] = $_POST['mobile'];
		echo "<script>window.location='admin/index.php'</script>";
	}
	else 
	{
		echo "<script>alert('Enter Correct Username and Password');</script>";
		echo "<script>window.location='login.php'</script>";	
	}
?>
	
	