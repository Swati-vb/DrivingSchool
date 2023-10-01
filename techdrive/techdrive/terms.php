<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();
?>
<html>
    <head>
        <title>Privacy & Terms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mycss.css">

        <style>
            p,h1,h2{
                padding:2%;
            }
        </style>
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
                <h3>Driving School</h3>
            </div>
            <div class="col-70 right">
                <a href="index.php" class="active">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">About Us 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="#">Our Team</a>
                    <a href="#">Gallery</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Services 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="#">RTO Services</a>
                    </div>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">Safety Rules 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <a href="#">Road Traffic Signs</a>
                    <a href="#">Car Maintainance Tips</a>
                    </div>
                </div> 
                <a href="#contact">Contact Us</a>
                <a href="#">Admin Login</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>    
        </div> 
    <!-- -------------------------        navbar end        ------------------------------ -->
    <!-- -------------------------       terms  start       ---------------------------    --> 
        <h1 class="blue">Tech Drive`s PRIVACY POLICY</h1>
        <h2>The 10 principles governing our actions as relating to the collection, use and disclosure of your personal information are as follows:</h2>
        <p>      1.<b> Accountability:</b> We are not responsible for maintaining and protecting your personal information under our control, however we will make a reasonable effort to protect your information and to comply with these ten principles. Our Privacy Officer has the responsibility for A Tech Drive compliance with these principles.
            <br> 2.<b> Identifying Purposes:</b> Before we collect your personal information, we shall identify the purpose for which the information is being collected.
            <br> 3.<b> Consent:</b> Your knowledge and consent are required for the collection, use or disclosure of your personal information, except where required or permitted by law. Providing your personal information to A Tech Drive is interpreted as granting A Tech Drive permission to use that information subject to A Tech Drive`s Privacy Policy.
            <br> 4.<b> Limiting Collection:</b> We shall limit the collection of your personal information to that which is necessary for the purposes which have been identified. We shall collect personal information only by fair and lawful means.
            <br> 5.<b> Limiting Use and Disclosure:</b> We shall not use or disclose your personal information for purposes other than those for which it was collected, unless you have otherwise consented, or when it is required or permitted by law.
            <br> 6.<b> Accuracy:</b> We shall maintain your personal information in as accurate, complete and up-to-date form as is necessary to fulfill the purposes for which it is to be used.
            <br> 7.<b> Safeguards:</b> We shall endeavor to protect your personal information using methods that are appropriate to the sensitivity of the information.
            <br> 8.<b> Openness:</b> We shall make information available concerning the policies and practices that apply to the management of your personal information.
            <br> 9.<b> Individual:</b> Access Upon request to A Tech Drive`s Privacy Officer, you shall be informed of the existence, use and disclosure of your personal information and you shall be given access to it, except where otherwise provided by law. You may challenge the accuracy and completeness of the information and have it amended as appropriate.
            <br> 10.<b>Contacting Us:</b> You may address any questions or concerns about our compliance with these principles, our Privacy and Anti-Spam Policies or the use of your personal information to:
        </p>
        <p>
            An Tech Drive has established this Privacy Policy to let you know how your personal information is processed and used. We will take steps to use your personal information only in ways that are compatible with our school and this Privacy Policy. The Members roster is only available to A Tech Drive members, who may access it online through the secure Members Only portion of the A Tech Drive websites. This area is safeguarded with what we believe are appropriate measures. Any misuse of this Member privilege, including unauthorized alteration of other member`s data or disclosure of information to non–members, will result in a loss of on-line member access. It is A Tech Drive`s strict policy that no personal information or any information contained within the Members Only portion of the A Tech Drive websites will be made available in any manner to a non-member at any time unless required by law. The following applies to A Tech Drive`s websites (including the entire A Tech Drive network), future newsletters, and opt-in mailing lists owned and operated by A Tech Drive.
        </p>
    <!-- -------------------------       terms  start       ---------------------------    --> 
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