<html>
    <head>
        <title>Contactus form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
        
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toggle-btn" >Contact Us</button>
                       
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>
            <form id="contactus" class="input-group" method="POST" action="contactpro.php">
                <input type="text" name="name" name="" class="input-field" placeholder=" Enter Name:" required>
                <input type="text" name="mobile" class="input-field" placeholder=" Enter Mobie No.:" required>
                <input type="text" name="email" class="input-field" placeholder="Enter Email:" required>
                <input type="text" name="city" class="input-field" placeholder="Enter City:" required>

                
                <button type="submit" class="submit-btn" name="submit">Contact Us</button>

		 <div class="social-icon" > <a href="index.php"><img src="../images/ar.png"></a></div>
            </form>
            
                
         </div>
            
       
       
    </body>
</html>