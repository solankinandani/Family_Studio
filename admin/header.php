<?php
	include("dbconfig.php");
	session_start();
	if(!isset($_SESSION['adminname']))
	{
		header("location:../login.php");
	}
?>
<html>
<head>
	<title>Parlour</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	
	<table class='tab' >
	<tr>
	<td class="tabtd"><a href="index.php">HOME</a></td>
	<td class="tabtd"><a href="category.php">CATEGORY</a></td>
	<td class="tabtd"><a href="subcategory.php">SUBCATE.</a></td>
	<td class="tabtd"><a href="appointment.php">BOOKING</a></td>
	<td class="tabtd"><a href="feedback.php">FEEDBACK</a></td>
	<td class="tabtd"><a href="faq.php">FAQ</a></td>
	<!-- <td class="tabtd"><a href="city.php">CITY</td> -->
	<td class="tabtd"><a href="client.php">CLIENT</td>
	<td></td><td></td>
	<td class="tabtd"><a href="logout.php">LOGOUT</a></td>
	</tr>
	</table>


	<!-- <h1 align="center">Admin</h1> -->
</body>
</html>

