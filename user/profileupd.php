<?php
	
	include("dbconfig.php");
	$id = $_POST['id'];
	$q = mysqli_query($cn,"select * from registration where id='$id'");
	$r = mysqli_fetch_row($q);
?>

<html>
    <head>
        <title>Contactus form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
        
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>

                        <button type="button" class="toggle-btn" >Profile</button>
                       
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>
             
<body>

	<form method="POST" action="profileupd2.php" enctype="multipart/form-data">

	<input type='hidden' name='id' value="<?php echo $id ?>">

	<table border="0"   align="center" cellspacing="2" cellpadding="2">

	<tr>
	<td>Name:</td><td><input type="text" name="name" class="input-field" placeholder=" Enter Name:" value="<?php echo $r[1]; ?>" ></td></tr>

	<tr>
	<td>Mobile:</td><td><input type="text" name="mobile" class="input-field" placeholder=" Enter Name:" value="<?php echo $r[2]; ?>"></td></tr>
	
	<tr>
	<td>Email:</td><td><input type="text" name="email" class="input-field" placeholder=" Enter Name:" value="<?php echo $r[3]; ?>"></td></tr>
	
	<tr>
	<td>Password:</td><td><input type="text" name="pass" class="input-field" placeholder=" Enter Name:"  value="<?php echo $r[4]; ?>"></td></tr>


	<tr>
	<td>City:</td><td><input type="text" name="city" class="input-field" placeholder=" Enter Name:" value="<?php echo $r[5]; ?>"></td></tr>

	<!-- Enter photo:
	<input type="file" name="photo" value="<?php echo $r[6]; ?>"><br> -->
	<tr>
	<td></td><td><input type="submit" class="submit-btn" name="submit"  value="Save"><div class="social-icon" > <a href="index.php"><img src="../images/ar.png"></a></div></td>
	</tr>
	
	</form>
	
</body>
</html>

