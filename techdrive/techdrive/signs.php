<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();
?>
<html>
    <head>
        <title>Signs</title>
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
    <!-- -------------------------       header  start      ---------------------------    -->
    <header>
        <h1>Road Traffic Signs</h1>
    </header>
    <!-- -------------------------       header  end        ---------------------------    -->
    <!-- -------------------------       info  start        ---------------------------    -->
        <div class="slideshow-container">        
            <img src="roadbanner.jpg" style="width:100%">
        </div>
        <h1 class="blue padl-2">ROAD TRAFFIC SIGNS</h1>
        <p class="padl-2 padr-2">Driving is not easy, just follow the safety rules and safe yourself from the road accident, incidents. Read More Traffic Signs here. Seeing every single traffic sign is among the main perspectives for all street clients. The Road traffic signs convey the essential standards and guidelines of the street through simple graphics that can be understood within seconds.</p>
        <p class="padl-2 padr-2">Any individual who wishes to apply for a driving permit first necessities to gain proficiency with all the traffic signs to breeze through the hypothetical assessment of driving. Here, in this post, we educate you in insight about the street signs and their significance.</p>
        <div class="none"></div>
        <h1 class="blue padl-2">SIGNIFICANCE OF ROAD TRAFFIC SIGNS</h1>
        <h3 class="padl-2">Following are the major points:</h3>
        <ul class="padl-2">
            <li class="padl-2 padr-2">Traffic signs are used as a technique for notice and directing drivers, assisting with managing the progression of traffic among vehicles, people on foot, cruisers, bikes and other people who travel to every part of the roads, interstates and different streets.</li>
            <li class="padl-2 padr-2">Seeing every single traffic sign is among the main perspectives for all street, road drivers. The traffic signs convey the essential standards and guidelines of the road.</li>
            <li class="padl-2 padr-2">Any individual who wishes to apply for a driving permit first necessities to gain proficiency with all the traffic signs</li>
        </ul>   
        <p class="padl-2 padr-2">According to researchers information, nearly 400 street mishaps occur in India consistently. Likewise, according to reports shared by WHO, street incidents cost practically 3% of the absolute GDP of a country. Subsequently, the street signs assume a significant part in the day by day life of all street clients.</p>
        <p class="padl-2 padr-2">Each street movers, be it a vehicle-mover`s or a person on foot, should consider significance of road signs. As we said, it is significant for all applicant of driving permit to know street signs and remembering them can really assist one with staying away from disasters.</p>
        <div class="none"></div>
    <!-- -------------------------       info  end          ---------------------------    -->
    <!-- -------------------------      signs  start        ---------------------------    -->
        <center>    
            <div class="row padl-2 padr-2">
                <div class="col-15 left pad-1">
                    <img src="No-Honking-Zone.jpg"></img>
                    <p>No Honking Zone</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Road-Merge-Ahead.jpg"></img>
                    <p>Road Merge Ahead</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Railway-Crossing-Ahead.jpg"></img>
                    <p>Railway Crossing Ahead</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Zebra-Crossing.jpg"></img>
                    <p>Zebra Crossing</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Road-Merge-Ahead.jpg"></img>
                    <p>Road Merge Ahead</p>
                </div>
            </div>
            <div class="row padl-2 padr-2">
                <div class="col-15 left pad-1">
                    <img src="U-Turn.jpg"></img>
                    <p>U-Turn</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="No-Entry.jpg"></img>
                    <p>No Entry</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Dont-Drink-Drive.jpg"></img>
                    <p>Don`t Drink & Drive</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="No-Parking.jpg"></img>
                    <p>No Parking</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Speed-Limit-to-40kmph.jpg"></img>
                    <p>Speed Limit to <br>40kmph</p>
                </div>
            </div>
            <div class="row padl-2 padr-2">
                <div class="col-15 left pad-1">
                    <img src="Hospital.jpg"></img>
                    <p>Hospital</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Railway-Crossing.jpg"></img>
                    <p>Railway Crossing</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Road-Underconstruction.jpg"></img>
                    <p>Road Underconstruction</p>
                </div>
                <div class="col-15 left pad-1">
                    <img src="Give-Way.jpg"></img>
                    <p>Give Way</p>
                </div>
                <div class="col-15 left">
                    <img src="Stop.jpg"></img>
                    <p>Stop</p>
                </div>
            </div>
        </center>
    <!-- -------------------------      signs  end          ---------------------------    -->
    <!-- -------------------------     footer  start        ---------------------------    --> 
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