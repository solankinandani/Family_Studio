<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location:../index.php');
	}
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
                        <button type="button" class="toggle-btn" >Ask Question</button>
                       
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>
            <form id="contactus" class="input-group" form action="faqpro.php"  method="POST">
                <input type="text" class="input-field" name="name" placeholder=" Enter Name:" required>
                <input type="text" class="input-field" name="mobile" placeholder=" Enter Mobie No.:" required>
                <input type="text" class="input-field" name="question" placeholder="Enter Question:" required>
                

                
                <button type="submit" class="submit-btn" name="submit" value="submit">Ask Me</button>
		<div class="social-icon" > <a href="index.php"><img src="../images/ar.png"></a></div>
            </form>
            
                
         </div>
            
       
       
    </body>
</html>

