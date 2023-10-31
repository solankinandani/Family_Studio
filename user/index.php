<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location:../index.php');
	}
?>
<html>
    <head>
            <title>
                parlour front-end
            </title>
		<link rel="stylesheet" href="styleuser.css">
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Always get the latest version -->
<!-- Not recommended for production sites! -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <!--  <div class="banner">

         <img src="images/P5.jpeg">
     </div>-->
     <section id="banner"> 
         <img src="images/logo.png" class="logo">
        <!-- <img src="images/P92.png" class="logo2">-->
         
         <div class="banner-text">
            <h1>Family Studio</h1>
            <P>style your look Is style your life</Style></P>

            <div class="banner-btn">
                <a href="#footer"><span></span>About Us</a>
                <a href="contact.php"><span></span>Contact Us</a>
            </div>
         </div>

     </section>


     <div id="sidenav">
        <nav>
            <ul>
                <li> <a href="#banner">HOME</a></li>
                
                <li> <a href="#category">Category</a></li>
                <li> <a href="#subcat">Subcategory</a></li>
                 <li><a href="#book-app">Help Us</a></li>
                <li> <a href="faq.php">Faq</a></li>
                
                <li> <a href="logout.php">Logout</a></li>

              
                
            </ul>
        </nav>
     </div>

     <div id="menubtn">
        <img src="images/menu.png"  id="menu">
     </div>
     

     <!--category-->
    <section id="category">
        <div class="title-txt">
            <p>Category</p>
            <h1>Why Choose Us</h1>
        </div>

        <div class="test-row">

            <div class="test-col">
                    <div class="card">
                    <table cellspacing="60" >
                    <?php
                    $c=1;
                        include("dbconfig.php");
                        $q=mysqli_query($cn,"select * from category");
                        while($r=mysqli_fetch_array($q))
                        {
                            if($c%4==0)
                            {
                                echo "<tr><td><img src='../images/".$r[2]."' alt='pic'><br><h1 align=center>".$r[1]."</h1></td>";
                            }
                            else
                            {
                                echo "<td><img src='../images/".$r[2]."' alt='pic'><br><h1 align=center>".$r[1]."</h1></td>";
                            }
                            $c++;
                    }
                    ?>
                       
                    </table>
                    </div>
                      
            </div>

        </div>    
    </section>

    <!--subcategory-->
    <section id="subcat">
        <div class="title-txt">
            <p>Subcategory</p>
            <h1>What Choose us</h1>
        </div>
        <div class="test-row">

        <div class="test-col">

            <div class="card">
            <table cellspacing="60" >
            <?php
                    $c=1;
                        include("dbconfig.php");
                        $q=mysqli_query($cn,"select * from subcategory");
                        while($r=mysqli_fetch_array($q))
                        {
                            if($c%4==0)
                            {
                                echo "<tr><td><img src='../upload/".$r[2]."' alt='pic'><br><h1 align=center>".$r[1]."</h1></td>";
                            }
                            else
                            {
                                echo "<td><img src='../upload/".$r[2]."' alt='pic'><br><h1 align=center>".$r[1]."</h1></td>";
                            }
                            $c++;
                    }
                    ?>
                    
            </table>
                    
            </div> 
        </div>
        </div>        
           
    </section>
    <!-- about us -->
    <section id="aboutus">
        <div class="title-txt">
            <p>About us</p>
            <h1>We Provide Better</h1>
        </div>

    <div class="service-box">
        <div class="single-service">
            <img src ="../images/f5.png">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3> Bold Eyes </h3>
                <hr>
                <p>This is test under descriptioin of barber foundatiion this is test under description of barber foundatiion</p>
            </div>
        </div>

        <div class="single-service">
            <img src ="../images/f10.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Hair Transpose</h3>
                <hr>
                <p>This is test under descriptioin of barber foundatiion this is test under description of barber foundatiion</p>
            </div>
        </div>
        <div class="single-service">
            <img src ="../images/f11.png">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Men's Face & Hair Style</h3>
                <hr>
                <p>This is test under descriptioin of barber foundatiion this is test under description of barber foundatiion</p>
            </div>
        </div>
        <div class="single-service">
            <img src ="../images/f13.jpg">
            <div class="overlay"></div>
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Hair Cut</h3>
                <hr>
                <p>This is test under descriptioin of barber foundatiion this is test under description of barber foundatiion</p>
            </div>
        </div>
        

    </div>

 </section>



    <!-- book appointment -->
    <section id="book-app">
        <div class="title-txt">
            <p>Help Us</p>
            <h1>What Client Say</h1>
        </div>
       


        <div class="test-row">

            <div class="test-col">

                <div class="user">
                    <img src="images/p92.png">
                    <div class="user-info">
                        <h1><a href="appointment.php">Book Appointment </a></i></h1>
                        
                    </div>

                </div>
                

            </div>

            <div class="test-col">
                <div class="user">
                    <img src="images/p92.png">
                    <div class="user-info">
                        <h1><a href="feedback.php">Feedback</a></i></h1>
                        
                    </div>
                    
                </div>
               
            
            </div>

            <div class="test-col">
                <div class="user">
                    <img src="images/p92.png">
                    <div class="user-info">
                        <h1><a href="profile.php">Profile</a> </h1>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>    




        
    </section>
    
<!--Footer-->
    <section id="footer">
            <img src="images/p92.png" class="footer-img">
            <div class="title-txt">
            <p>Our Contact US</p>
            <h1>Visit Parlour Today</h1>
            </div>

    <div class="footer-row">
        <div class="footer-left">
            <h1>Opening Hours</h1> 
            <p><i class="fa fa-clock-o" aria-hidden="true"></i>Monday to Friday - 9am to 9pm</p>
            <p><i class="fa fa-clock-o" aria-hidden="true"></i>Saturday to Sunday - 8am to 11pm</p>
        </div> 
    </div>
        
    <div class="footer-right">
        <h1>Get in Touch</h1>
            <p>Address:motibag,junagadh <i class="fa fa-map-marker" aria-hidden="true"></i></p>
            <p>Email:family@gmail.com <i class="fa fa-paper-plane" aria-hidden="true"></i></p>
            <p>Mobile No:+916354484757 <i class="fa fa-phone" aria-hidden="true"></i></p>    
    </div>
    <div class="link">
        <i class="fa fa-facebook" ></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter" ></i>
        <i class="fa fa-youtube-play"></i>
        <p>Copyright Easy Tutorials YouTube Channel</p>

    </div>
    </section>


   



 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
     <script>
        var menubtn = document.getElementById("menubtn")
        var sidenav = document.getElementById("sidenav")
        var menu = document.getElementById("menu")

        sidenav.style.right = "-250px";



     menubtn.onclick = function()
     {
        if(sidenav.style.right=="-250px")
        {
            sidenav.style.right = "0";
            menu.src ="images/close.png";

        }
        else
        {
            sidenav.style.right = "-250px";
            menu.src ="images/menu.png"
        }
     }
    var scroll = new SmoothScroll('a[href*="#"]', 
    {
	speed: 500,
	speedAsDuration: true
    });

     </script>
    
    </body>
