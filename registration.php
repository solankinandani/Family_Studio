<html>
    <head>
        <title>Login And Registrartion form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
        
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>
                        
                        <button type="button" class="toggle-btn" >Register</button>
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>

          
            <form id="register" class="input-group" action="registrationpro.php" method="POST" >
                <input type="text" name="name" class="input-field" placeholder=" Enter Name:" required>
                <input type="mobile" name="mobile" class="input-field" placeholder=" Enter Mobie No." maxlength="10" required onblur="(this.value<1111111111 || this.value>9999999999)?this.focus():email.focus()">
                <input type="email" name="email"class="input-field" placeholder="Email:" required>
                <input type="text" name="pass" class="input-field" placeholder="Enter Password" required>
                <input type="text"  name="city" class="input-field" placeholder="Enter city:" required>      
                <button type="submit" class="submit-btn" name="submit" value="submit" >Register</button><br>
                <a href="login.php"><button type="button" class="submit-btn" >Login</button></a>
		<div class="social-icon" > <a href="index.php"><img src="images/ar.png"></a></div>
            </form>
                
            </div>
            
       
       
        </script>
    </body>
</html>