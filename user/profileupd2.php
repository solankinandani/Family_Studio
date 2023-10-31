<?php
	include("dbconfig.php");
	$id = $_POST['id'];
	if(isset($_POST['submit']))
	{
		
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$city = $_POST['city'];
		// $photo = $_FILES['photo']['name'];
		// move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);

		$q = mysqli_query($cn,"UPDATE registration SET name = '$name', mobile = '$mobile', email = '$email', password = '$pass', city = '$city' WHERE id = '$id'");

		echo "<script>alert('Record Update Successfull')</script>";
		echo "<script>document.location='profile.php'</script>";		
	}
	else
	{
		echo "<script>alert('Invalid Operation')</script>";
		echo "<script>document.location='index.php'</script>";
	}
 ?>