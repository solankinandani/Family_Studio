<?php

include("dbconfig.php");
include("header.php");

	$id=$_POST['id'];
	$name=$_POST['name'];
        $photo=$_POST['photo'];
	move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);
		
	//$cn=mysqli_connect("localhost","root","","parlour");
	$q=mysqli_query($cn,"update subcategory set name='$name', photo='$photo' where id='$id'");
?>
<script>
	window.location="subcategory.php";
</script>