<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();
?>
<html>
    <head>
        <title>Services</title>
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
        <h1>RTO Services</h1>
    </header>
    <!-- -------------------------       header  end        ---------------------------    -->
    <!-- -------------------------       info  start        ---------------------------    -->
        <div class="none"></div>
        <h1 class="padl-2 blue">All type of RTO services</h1>
        <p class="padl-2 padr-2">
            Vehicles are a necessary piece of individuals lives. Be it a bike, a vehicle, or taxis, Indians depend on these vehicles to meet their transportation needs. Normally RTO Services are usually associated with a driving license one connects the vehicle business with colossal assembling plants and tempting display areas. Notwithstanding, the back-end administrative angle related to the business regularly goes unnoticed. In this article, we will know about all types of RTO services. Let`s see some of the important types of RTO services.
        </p>
        <div class="none"></div>
        <div class="row">    
            <div class="col-60 right">
                <img src="reg.jpg"></img>
            </div>
            <div class="col-38 left padl-2">
                <h2 class="blue">Registration of vehicle</h2>
                <p>One of the essential duties of an RTO is to keep a vehicle information base. This is done while playing out the vehicle enlistment work. All new vehicles require to be enlisted at the appropriate RTO. That is the manner by which you get the tag of your vehicle.</p>
                <p>RTOs likewise handle vehicle enrollment capacities concerning the offer of a vehicle, giving No Objection Certificates in situations where vehicles should be enlisted starting with one state`s RTO then onto the next state`s RTO and giving vehicle grants.</p>
                <p>To comprehend the RTO capacities identified with vehicle enrollment, you need to experience the accompanying cycles. Note that the substance introduced underneath is only for your data and may shift starting with one RTO then onto the next. The cycles may be overhauled later on too.</p>
            </div>
        </div> 
        <div class="none"></div>
        <h2 class="padl-2 blue">Vehicle Registration Process at RTO:</h2>
        <p class="padl-2 padr-2">
            In most cases, the registration process is handled by the vehicle dealer. Here`s how the vehicle registration process at RTO pans out.
            <br>
            <b>Step 1 :</b> Fill out the registration form and submit it to the District Transport Office.
            <br>
            <b>Step 2 :</b> Submit the required documents. Here`s a list: form 20, vehicle`s sales certificate, invoice, policy for the vehicle, applicant`s photos, and identity proof.
            <br>
            <b>Step 3 :</b> An inspecting officer will evaluate your form and therefore the necessary documents. Once approved, you shall receive a vehicle license number and a receipt.
            <br>
            <b>Step 4 :</b> Get the registration mark on the vehicle`s number plate in thirty days and seek approval from the registration authority.
        </p>
        <div class="none"></div>
        <div class="row">    
            <div class="col-60 right">
                <img src="dl.jpg"></img>
            </div>
            <div class="col-38 left padl-2">
                <h2 class="blue">New Driving Licence</h2>
                <p>The RTO is famous as a body that deals with the driver`s licence. However, this one-line description of this performance doesn`t live up to as their square measure inordinately of services that comprise the umbrella of a driver`s licence.</p>
                <p>There square measure four varieties of driving licenses issued by the RTO – Learner`s License, Permanent License (received once finishing the learner`s license period), business driver`s licence, and a world Driving allow. Aside from issuing these licenses, there`s the task of managing license renewal, duplicate licenses, and conducting driving tests furthermore.</p>
                <p>A driving license is additionally issued as per the kind of auto in question. For instance, vehicles with gear, while not the gear, passenger-carrying vehicles, vehicles wont to transport merchandise. A driver`s licence has all the required data regarding the driving force and also the licensed category of auto</p>
            </div>
        </div> 
        <div class="none"></div>
        <div class="row">
            <div class="col-31 pad-1 left">
                <img src="roadtax.jpg"></img>
                <h4>Road Tax</h4>
                <p>The government levies bound taxes associated with the vehicle. The road tax is one such tax. The RTO is to blame for the gathering of the Road Tax. This task is sometimes performed whereas registering the vehicle for the primary time.</p>
            </div> 
            <div class="col-31 pad-1 left">
                <img src="vehiclecheck.jpg"></img>
                <h4>Vehicle Check</h4>
                <p>RTO conjointly checks if the vehicles on the road go with the foundations mentioned within the motorcars Act. They conduct inspections for an equivalent from time-to-time.</p>
            </div> 
            <div class="col-31 pad-1 right">
                <img src="roadsafety.jpg"></img>
                <h4>Road Safety</h4>
                <p>Road accidents are one of the leading causes of death everywhere in the world. The RTO ensures road safety measures are in situ as express within the cars Act.</p>
            </div> 
        </div>
        <div class="none"></div>
        <h1 class="blue padl-2 padr-2">Transfer of Ownership</h1>
        <p class="padl-2 padr-2">Transfer of ownership is the means by which the ownership of a property is transferred from one hand to another. This includes the purchase of a property, assumption of mortgage debt, exchange of possession of a property, or any other land trust device.</p>
        <div class="none"></div>
        <h1 class="blue padl-2 padr-2">NOC</h1>
        <p class="padl-2 padr-2">A No Objection Certificate or NOC is a legal document that is issued by the Regional Transport Office (RTO). If you intend to move from one state to another and take your two-wheeler with you, you need to re-register your vehicle to the new state. . NOC should be obtained for stays extending 3 months.</p>
        <div class="none"></div>
    <!-- -------------------------       info  start        ---------------------------    -->
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