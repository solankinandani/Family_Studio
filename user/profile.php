<?php
	session_start();
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
             
	<?php
    include("dbconfig.php");


    $mobile=$_SESSION['username'];

	$q = mysqli_query($cn,"select * from registration where mobile ='".$mobile."'");
	$r = mysqli_fetch_array($q);

	echo "<table border=0 cellspacing='2' cellpadding='2'>"; 
	echo"<tr><td ><b>Id::</td><td class='input-field'>".$r[0]."</td></tr>";

    echo"<tr><td><b>Name::</td><td class='input-field'>".$r[1]."</td></tr>";

    echo"<tr><td><b>Mobile::</td><td class='input-field'>".$r[2]."</td></tr>";

    echo"<tr><td><b>Email::</td><td class='input-field'>".$r[3]."</td></tr>";

    echo"<tr><td><b>Password::</td><td class='input-field'>".$r[4]."</td></tr>";

    echo"<tr><td><b>City::</td><td class='input-field'>".$r[5]."</td></tr>";

   echo" <td><form method='POST' action='profileupd.php'>
					<input type='hidden' name='id' value='".$r[0]."'>
					<td><input type='submit' name='update'  class='submit-btn' value='Update 🔃'><div class='social-icon' > <a href='index.php'><img src='../images/ar.png'></a></div></td>
					
				</form></td></tr>";
	echo "</table>";
	
    ?>
      
       
		
    </body>
</html>

