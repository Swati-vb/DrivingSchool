<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();

 if(isset($_POST['contact']))
  {
    $name=$_POST['name'];
    $pno=$_POST['pno'];
    $message=$_POST['message'];

    $insert = "INSERT INTO messages(`name`,`pno`,`messages`) VALUES ('$name','$pno','$message')";
    $insert=mysqli_query($con,$insert);
    if(!$insert)
    {
        echo mysqli_error($con);
    }
  }
?>
<html>
    <head>
        <title>Tips</title>
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
        <h1 style="color:black;">Contact Us</h1>
    </header>
    <!-- -------------------------       header  end        ---------------------------    -->
    <!-- -------------------------       info  start        ---------------------------    -->                     
        <div class="none"></div>
        <div class="row">
            <div class="col-40 padl-5 left">
                <h1 class="blue">Contact Information</h1>
                <h3>For Tech Drive Training & License related queries<br>
                        You can reach us Via Phone, Chat, or Email
                </h3>
                <div class="none"></div>
                <h4>Our Location</h4>
                <label><?php echo $row['add']; ?></label><br>
                <label><?php echo $row['addd']; ?></label><br>
                <h4>Contact Number</h4>
                <label>+91 <?php echo $row['pno']; ?></label><br>
                <h4>Email us</h4>
                <label><?php echo $row['email']; ?></label><br>
                <h4>Business Hours</h4>
                <p>Mon – Sun : 6 am to 8 pm</p>
            </div>
            <div class="col-40 padl-5 left">
			<h1 style="color:blue;font-size:40px;">Enquiry</h1>
                <form method="post"><br>
                    <div class="row">
                        <div class="col-25">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="name" name="name" placeholder="Your name..">
                        </div>                        
                    </div><br><br><br>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Phone No</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="pno" placeholder="Your Phone No..">
                        </div>
                    </div><br><br><br>                
                    <div class="row">
                        <div class="col-25">
                            <label for="message">Message</label>
                        </div>
                        <div class="col-75">
                            <textarea id="message" name="message" placeholder="Write Message Here.." style="height:100px"></textarea>
                        </div>
                    </div><br><br><br>            
                    <div>
                        <input type="submit" class="button" style="float:left;" value="Submit" name="contact">
                    </div>                
                </form>
            </div>        
        </div>
       
    <!-- -------------------------        info  end         ---------------------------    -->
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