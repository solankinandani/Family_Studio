<html>
    <head>
        <title>Contactus form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
       
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toggle-btn"> Appointment</button>
                       
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>
            <form id="book-app" class="input-group" method="POST" action="appointmentpro.php">
                <input type="text" class="input-field" name="name"  placeholder=" Enter Name:" required>
                <input type="text" class="input-field"name="email" placeholder="Enter Email:" required>
                <input type="text" class="input-field" name="mobile" placeholder=" Enter Mobie No.:" required>
                <input type="text" class="input-field" name="category"  placeholder="Enter Category:" required>
                <input type="date" class="input-field" name ="date" placeholder=" Enter Appointment Date.:" required>
                <input type="time" class="input-field" name="time" placeholder="Enter Appointment Time:" required>

                <Note:Appointnt>Time: 9AM To 5PM</Note:Appointnt> 
                

                
                <button type="submit" class="submit-btn" name="submit" value="submit">Book Appointment</button>
		<div class="social-icon" > <a href="index.php"><img src="../images/ar.png"></a></div>
            </form>
            
                
         </div>
            

       
    </body>
</html>