<html>
    <head>
        <title>Contactus form-Easy Tutorial</title>
        <link rel = "stylesheet" href = "styleuser.css">
    </head>
    <body>
     
            <div class="from-work">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toggle-btn" >Feedback</button>
                       
            </div>
            <div class="social-icon"> 
                <img src="images/f1.png">
                <img src="images/tw.png">
                <img src="images/g1.png">
            </div>
            <form id="feedback" class="input-group" method="POST" action="feedbackpro.php">


                <input type="text" class="input-field" placeholder=" Enter Name:" name="name" required>
                <input type="text" class="input-field" placeholder=" Enter Mobie No.:"name="mobile" required>
                <input type="text" class="input-field" placeholder="Enter Email:" name="email" required>
                <input type="text" class="input-field" placeholder="Enter Comment:" name="comment" required>
                <input type="text" class="input-field" placeholder="Enter Feedback:" name="feedback" required><br>
                <input type="text" class="input-field" placeholder="Enter Advice:" name="advice" required>
                

                <button type="submit" class="submit-btn" value="submit" name="submit">Feedback</button>

	 <div class="social-icon" > <a href="index.php"><img src="images/ar.png"></a></div>
                
            </form>
            
                
         </div>
            
 
       
    </body>
</html>