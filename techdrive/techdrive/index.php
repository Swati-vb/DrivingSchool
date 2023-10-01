<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();
?>
<html>
    <head>
        <title>Tech Drive</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mycss.css">        
    </head>
<body>    
<?php
    $query=mysqli_query($con,"SELECT * FROM details where id=1");
    if($query)
    {
        while($row = mysqli_fetch_assoc($query))
        {
?> 
    <div class="none blue">
        <span>&#128222;+91 <?php echo $row['pno']; ?> </span>
        <span class="right" style="font-size:15px; color:blue">  &#9993; <?php echo $row['email']; ?></span>
    </div>
    
    <!-- -------------------------       navbar start       ------------------------------ -->
        <div class="topnav row" id="myTopnav">
            <div class="col-28 left padl-2">
                <h3>Tech Drive</h3>
            </div>
            <div class="col-70 right">
                <a href="index.php" class="active">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Services 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="rto.php">RTO Services</a>
                    </div>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">Safety Rules 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="signs.php">Road Traffic Signs</a>
                    <a href="tips.php">Car Maintainance Tips</a>
                    </div>
                </div> 
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Admin Login</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>    
        </div> 
    <!-- -------------------------        navbar end        ------------------------------ -->
    <!-- -------------------------      banner start        ------------------------------ -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 2</div>
                <img src="banner1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 2</div>
                <img src="banner2.jpg" style="width:100%">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    <!-- -------------------------        bnner end         ------------------------------ -->
    <!-- -------------------------       info start         ------------------------------ -->
        <div class="none"></div>
        <div class="row">    
            <div class="col-60 left">
                <img src="drive.jpg"></img>
            </div>
            <div class="col-38 right padr-2">
                <h2 class="blue">Best Driving School in Uttara Kannada</h2>
                <h2> Tech Drive: No.1 Car Teaching School in Mavalli, Murudeshwara</h2>
                <p>The reason why our motor school has become the Best Driving School Murudeshwara is providing training, teaching, and road safety guidelines. Learning to drive is not just about getting a license but is an essential skill for life. Since 2017 we are delivering great value for our customers.  We are one of the oldest and best schools in Mavalli and are one of the most progressive riding schools. We have a mission to teach you to safe riding skills.</p>
                <p>Our school is especially known for its individualistic way to deal with each learner. We maintain an honest business and you as a student or parent can feel safe and secure in all conditions. That`s why our team, we are the Best professional School In Murudeshwara.</p>
            </div>
        </div> 
        <div class="none"></div>
        <center>
            <h2 class="blue">OUR FEATURES</h2>
            <h2>Who Should Get Driving Lessons?</h2><br>  
            <div class="row">
                <div class="col-33_3 left">
                    <img src="choose.jpg"></img>
                    <h4>01  Choosing A Right School</h4>
                    <p>The right school is accredited according to state laws and will prepare you to be a safe, confident driver.</p>
                </div> 
                <div class="col-33_3 left">
                    <img src="start.jpg"></img>
                    <h4>02 Start with Basics</h4>
                    <p>When you first start learning to drive, it can seem a little overwhelming. We know that, but don`t worry.</p>
                </div> 
                <div class="col-33_3 right">
                    <img src="test.jpg"></img>
                    <h4>03 Road Test Preparation</h4>
                    <p>Practice makes perfect! We know you`ve heard that before, but it`s especially true while riding a vehicle.</p>
                </div> 
            </div>
            <div class="none"></div>
            <div class="row blbg">
                <br>
                <h1>Schedule Your Best Driving School Uttara Kannada!</h1>
                <h3>Call Us Now</h3>
                <h2>+91 <?php echo $row['pno']; ?></h2>
            </div>
            <div class="none"></div>
            <h1>Why Choose Us?</h1>
            <h3>We understand that learning to drive isn`t cheap, many schools will take advantage of this and charge you a larger sum than necessary; not us.</h3><br>
            <div class="row">
                <div class="col-33_3 left">
                    <img src="safety.png"></img>
                    <h4>BEST SAFETY MEASURES</h4>
                    <p>Our Instructors are Highly-Trained in the latest Safety Techniques & Rules of the Road.</p>
                </div> 
                <div class="col-33_3 left">
                    <img src="expinst.png"></img>
                    <h4>EXPERIENCED INSTRUCTORS</h4>
                    <p>All our Instructors are DMV Licensed, mentally and physically fit and have decade or more of Instruction History.</p>
                </div> 
                <div class="col-33_3 right">
                    <img src="timing.png"></img>
                    <h4>PERFECT TIMING</h4>
                    <p>Now is the perfect time to start your In Class, Online or Behind The Wheel Training.</p>
                </div> 
            </div>
            <div class="row">
                <div class="col-33_3 left">
                    <img src="fees.png"></img>
                    <h4>AFFORDABLE FEE</h4>
                    <p>The process can be expensive. So we constantly monitor our competitive pricing.</p>
                </div> 
                <div class="col-33_3 left">
                    <img src="format.png"></img>
                    <h4>CLASS FORMATS</h4>
                    <p>We offer In Classroom Drivers Education as well as Online Drivers Education.</p>
                </div> 
                <div class="col-33_3 right">
                    <img src="pay.png"></img>
                    <h4>PAYMENT PLANS</h4>
                    <p>We allow you to decide when and how you want to pay. We accept all major forms of payments.</p>
                </div> 
            </div>
            <div class="none"></div>
        </center>
    <!-- -------------------------        info end          ------------------------------ -->  
    <!-- -------------------------       footer  start      ---------------------------    --> 
        <div class="footer subpart blbg">
            <div class="colmn">
                <h4>DISCRIPTION</h4><br>
                <p>We Provide A Reputable & Professional Service that Aims To Give You Confidence To Pass Your Test & Drive Safely on Any Kind of Roads. Four Wheeler Training & Two Wheeler Training will Be Given Here.
                </p>  
            </div>
            <div class="colmn">
                <h4>COMPANY</h4><br>
                <a href="rto.php">RTO Services</a><br>                          
                <a href="signs.php"> Road Traffic Signs</a><br>
                <a href="tips.php">Car Maintainance Tips</a><br>
                <a href="contact.php">Contact Us</a><br>
                <a href="terms.php">Privacy & Terms</a><br>
            </div>
            <div class="colmn">
                <h4>CONTACT US</h4><br>
                <label><?php echo $row['add']; ?></label><br>
                <label><?php echo $row['addd']; ?></label><br>
                Mon – Sun : 6am - 8pm <br>
                <label>+91 <?php echo $row['pno']; ?></label><br>
                <label><?php echo $row['email']; ?></label><br>
            </div> 
<?php
        }
    }
?>                             
        </div><br><br>
        <div class="copy blbg">
            <p >&copy; Copyrights <a href=""><b>Tech Drive</b></a>. All Rights Reserved. </p>
        </div>  

    <!-- -------------------------       footer  end        ---------------------------    --> 
</body>
<script>
    /* responsive bar */
    function myFunction() 
    {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") 
        {
            x.className += " responsive";
        } 
        else 
        {
            x.className = "topnav";
        }
    }
    /* slides */
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" dactive", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " dactive";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</html>