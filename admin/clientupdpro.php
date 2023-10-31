<?php

include("dbconfig.php");
include("header.php");

	$id=$_POST['id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    // $photo=$_POST['photo'];

	//$cn=mysqli_connect("localhost","root","","parlour");
	$q=mysqli_query($cn,"update registration set name='$name',mobile='$mobile',email='$email',password='$password',city='$city' where id='$id'");
?>
<script>
	window.location="client.php";
</script>