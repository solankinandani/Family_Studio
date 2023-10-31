<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location:../index.php');
	}
?>
<html>
<head>
	<title>Parlour</title>
</head>
<body>
	<h1>user</h1>
	<h1><a href="index.php">Home</a></h1>
	<h1><a href="subcategory.php">subcategory</a></h1>
	<h1><a href="category.php">category</a></h1>
	<h1><a href="appointment.php">book appoinment</a></h1>
	<h1><a href="../feedback.php">feedback</a></h1>
	<h1><a href="aboutus.php">about us</a></h1>
	<h1><a href="contactus.php">contact us</a></h1>
	<h1><a href="faq.php">Faq</a></h1>
	<h1><a href="profile.php">Profile</a></h1>
	<h1><a href="logout.php">logout</a></h1>
</body>
</html>