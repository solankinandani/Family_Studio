<?php
	// $id=$_GET['id'];
	// $cn=mysqli_connect("localhost","root","","parlour");
	// $q=mysqli_query($cn,"delete from registration where id='$id'");
	// echo"<script>window.location='client.php'</script>";

	if(isset($_POST['delete']))
	{
		include("dbconfig.php");
		$id = $_POST['id'];
		$q = mysqli_query($cn,"delete from registration where id='$id'");
		echo "<script>window.location='client.php';</script>";
	}
	else
	{	
		echo "<script>alert('Illegal Operation...');</script>";
		echo "<script>window.location='client.php';</script>";		
	}
?>
<?php
	include("footer.php");
?>