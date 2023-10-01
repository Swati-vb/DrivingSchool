<?php

session_start(); 
require_once "functions.php" ;
$con=connect_my_db();

$result=mysqli_query($con,"SELECT * FROM users where id=".$_SESSION['userid']);
$learner=mysqli_query($con,"SELECT * FROM learner ");
$trainer=mysqli_query($con,"SELECT * FROM trainer ");
$queries=mysqli_query($con,"SELECT * FROM messages ");

if(isset($_POST['logout'])) 
{
    session_destroy();
    header('Location: index.php');
}
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
if($result && mysqli_num_rows($result)>0)
{
    $userinfo=mysqli_fetch_assoc($result);
    
    if($userinfo['desg']==2)
    {
?>
    <div class="row">
        <div class="none blue col-80 right">
            <h1> Admin Panel </h1>
        </div>    
        <!-- -------------------------       navbar start       ------------------------------ -->
            <div class="sidenav col-28 left">
                <center><h2 class="white">Admin</h2></center><br><p></p><br>
                <a href="updetails.php">Update Address</a>
                <a href="learner.php">Learner Details</a>
                <a href="trainer.php">Trainer Details</a>
                <a href="queries.php">Queries</a>
                <form method="post">
                    <button name="logout" class="logout">Log Out</button>
                </form>
            </div>  
            <div class="topnav col-80 right" id="myTopnav">
                <div class="col-28 right padl-2">
                    <h3>Tech Drive</h3>
                </div>
            </div>          
        <!-- -------------------------        navbar end        ------------------------------ -->
        <!-- -------------------------      banner start        ------------------------------ 
            <div class="col-80 right">
                <div class="row">    
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
                </div>   
             -------------------------        bnner end         ------------------------------ -->
        <!-- -------------------------        info start        ------------------------------ -->
            <div class="col-80 right"><br><br>
                <div class="row">
                    <div class="col-2 left">&nbsp;</div>
                    <div class="bgblue col-20 padding left">
                        <span class="white">no of learners</span><br>
                        <span class="white"><?php echo mysqli_num_rows($learner); ?></span>
                    </div><div class="col-2 left">&nbsp;</div>
                    <div class="bgblue col-20 padding left">
                        <span class="white">no of trainers</span><br>
                        <span class="white"><?php echo mysqli_num_rows($trainer); ?></span>
                    </div><div class="col-2 left">&nbsp;</div>
                    <div class="bgblue col-20 padding left">
                        <span class="white">no of queries</span><br>
                        <span class="white"><?php echo mysqli_num_rows($queries); ?></span>
                    </div>
                </div>     
            </div>       
        <!-- -------------------------         info end         ------------------------------ -->

    </div>   
<?php
    }
}
else header('Location: login.php');
?>   
</body>
<script>
        //side navbar
        function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("Sidenav").style.display = "none";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("Sidenav").style.display = "block";
    }

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