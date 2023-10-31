<html>
    <head>
        <title>Login And Registrartion form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
		

       
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toggle-btn" ">Log In</button>
                        
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>

            <form id="login" class="input-group" action="loginpro.php" method="POST">
                <input type="text" name="mobile" class="input-field" placeholder=" Enter Mobie No.:"  requiredsize="10">
                <input type="text" name="pass"class="input-field" placeholder="Enter Password:" required>
			<br><br><br>
		
                <a href="forget.php" ><h4>Forget Password<h4></a><br>
                <button type="submit" class="submit-btn" name="submit" value="submit">Log in</button><br>
		<a href="registration.php"><button type="button" class="submit-btn" >Register</button></a>
             <div class="social-icon" > <a href="index.php"><img src="images/ar.png"></a></div>
            </div>
           
        </div>
 
       
            
    </body>
</html>