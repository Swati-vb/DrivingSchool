<?php
 session_start();
 require_once "functions.php" ;
 $con=connect_my_db();
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
    
    <!-- -------------------------       navbar start       ---------------------------    -->
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
    <!-- -------------------------        navbar end        ---------------------------    -->
    <!-- -------------------------       header  start      ---------------------------    -->
    <header>
        <h1>Car Maintainance Tips</h1>
    </header>
    <!-- -------------------------       header  end        ---------------------------    -->
    <!-- -------------------------       info  start        ---------------------------    -->
        <div class="none"></div>
        <div class="row">    
            <div class="col-60 right">
                <img src="tips.jpg"></img>
            </div>
            <div class="col-38 left padl-2">
                <h2 class="blue">CAR MAINTENANCE TIPS</h2>
                <p>Tech Drive is always ready to give car maintenance tips that help learners to drive a car in good condition. Apart from the common steps, there`s a variety of other maintenance tips that you simply got to confine your mind. So as to confirm that your vehicle doesn`t suffer from frequent breakdowns and stays in a good running condition for an extended time to return. Following maintenance tips will make sure that your vehicle delivers optimum performance and doesn`t desert you within the time of need. Talking about the maintenance tips, you would like to vary the oil daily, to stay it running smoothly. Then, there`s a requirement for you to wax it frequently, to make sure that your vehicle shines beautifully and remains free from corrosion. Whenever you get your car maintenance tips, don`t compromise on the standard of spare parts and choose the first ones.</p>
            </div>
        </div> 
        <div class="none"></div>
        <p class="padl-2 padr-2">Local spare parts, though commanding a coffee price, will adversely affect the performance of your vehicle, especially at the end of the day. Another maintenance tip that you simply got to follow to the letter is to require care of minor problems soon before they balloon into something bigger and serious. At an equivalent time, aside from the engine, ensure proper maintenance of tires, gears, equipment, and even electrical system. If routinely undertaken, the following pointers will surely prolong the lifetime of your vehicle and ensure a smooth and effortless drive. Tech Drive trainers are well efficient in the field of motor training.</p>
        <div class="none"></div>
        <h1 class="padl-2 blue">Maintaining your Car up to the mark is not an easy task. It requires continuous effort from the side of car owners.</h1>
        <p class="padl-2 padr-2">Here are some car maintenance tips to help keep your vehicle running in good condition.</p>
        <div class="none"></div>
        <div class="row">
            <div class="col-31 pad-1 left">
                <img src="Air-Condition.jpg"></img>
                <h4>Air Condition</h4>
                <p>Air Conditioner is an integral part of any car taking care of the comfort of the passengers. Proper functioning of air conditioning is certainly a thing of importance for the comfort of the occupants of the vehicle. While driving in hot and humid weather, efficient air conditioning is a must.</p>
            </div> 
            <div class="col-31 pad-1 left">
                <img src="Brakes.jpg"></img>
                <h4>Brakes</h4>
                <p>Brakes are, of course, the foremost vital safety component of a car. And it`s mandatory for your security that you simply keep the brakes of your vehicle in the best condition. Break problems don`t rise to a significant level suddenly. Most brake problems develop gradually and if the system is detected properly, these are often detected before they become serious.</p>
            </div> 
            <div class="col-31 pad-1 right">
                <img src="Cooling-System.jpg"></img>
                <h4>Cooling System</h4>
                <p>The cooling system during a driving protects the engine from overheating. An efficient cooling system to stay the engine protected. One should use good quality coolant for a car engine. The coolant level must be checked a minimum of once a fortnight. During summers, it must be checked and preferably at more frequent intervals during summers.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-31 pad-1 left">
                <img src="Engine.jpg"></img>
                <h4> Engine</h4>
                <p>When it involves a car, the foremost important component is that the engine. The engine can rather be considered the soul. You would possibly have the foremost well-maintained and sparkling set of wheels in your neighborhood, but if its engine isn`t working, it`s nearly as good as waste, to form sure that your vehicle features long life.</p>
            </div> 
            <div class="col-31 pad-1 left">
                <img src="Equipment.jpg"></img>
                <h4>Equipment</h4>
                <p>One of the essential components of a car comprises its engine and talking about the engine, its equipment must properly be taken care of. Proper maintenance is nearly as good as incomplete without adequate maintenance of the equipment.</p>
            </div> 
            <div class="col-31 pad-1 right">
                <img src="Gears.jpg"></img>
                <h4>Gears</h4>
                <p>The gear system forms a crucial component of a car and thus, requires proper handling and a spotlight on your part. Since they assist you to maintain the speed of your vehicle; you can`t afford to misuse the gears. While changing the gears, the clutch must be completely pressed. At an equivalent time with car maintenance tips.</p>
            </div> 
        </div>
        <div class="none"></div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Tyres</h4>
                <p>Though an outsized number of vehicle owners are unaware of the very fact, car tyres are crucial to the performance and safety of the motor. When maintenance is the question in point, ensuring an honest condition of the tyres is a problem that occupies a central place.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Battery</h4>
                <p>The battery acts as the nerve center of a car`s entire electrical system, storing energy produced by the alternator or generator and supplying it to those systems requiring smooth, uninterrupted, and continuous current (lights, fuel injection system, main computer). There are several sorts of batteries utilized in modern automobiles.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Electrical System</h4>
                <p>Has your car ever stalled midway thanks to electrical faults? Such a scenario is sort of frustrating, isn`t it? However, proper maintenance of the electrical system of your riding machine can go an extended way in ensuring that it gives a trouble-free performance in each and each.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Starter</h4>
                <p>Starter is just a DC motor that turns the engine crankshaft through the flywheel, starting the combustion process by creating compression within the cylinders. Voltage to the starter is supplied directly from the battery and is controlled by a relay and/or solenoid operated from the key switch inside your motor.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Alternator</h4>
                <p>The alternator produces electricity wont to maintain battery storage charge and to assist run all the electrical accessories, including the ignition and therefore the engine control systems. it`s belt-driven by the engine and produces an AC, which is converted internally to 12 volts DC, by the diode bridge or rectifiers.</p>
            </div>
        </div>
        <div class="none"></div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Don`t keep going on reserve fuel</h4>
                <p>Many Drivers tried to drive a car on reserve fuel which can harm the engine directly. Running on low fuels gives a chance to junk directly to come in the engine part which can damage your engine heavily.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Change your spark plugs</h4>
                <p>Many Time Spark plug contributes more than any other factor, sometimes your car engine doesn`t start and the reason why it does not start is only because of the spark plug, just change it and you will see the result.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Change engine oil at regular intervals</h4>
                <p>This is the best thing you can do. Check Oil Level every week and top up if the level is low. The Engine Oil helps in maintaining your engine in good condition and it expands the life of your motor too.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Battery check</h4>
                <p>Battery Check Plays important role in giving a charge to the engine. The battery is responsible for putting the charge in the engine to start, a low battery can lead to a problematic situation like, the car is not starting properly even everything is in the good condition.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Change your Engine Air Filter</h4>
                <p>A Dusty air filter gives a chance to dirt come directly into the engine, Just Check the air filter and inspect it. If it is a demand for change, just change it.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Check/replace the wipers</h4>
                <p>Wipers always help in bad weather, and if they are in bad condition, try to change the wipers in every two to three years, you can replace wipers without any help, you can change on your own.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Brake Check</h4>
                <p>Checking Brakes is another big task. While Driving if you find any noise or sound then go to the service center as soon as possible.</p>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Check Tyre pressure</h4>
                <p>Check the Tire Pressure every 7 days, If the Tyre is not filled up with air, it will lead to fuel consumption. Sometimes you will find yourself in trouble.</p>
            </div> 
        </div>
        <div class="row">
            <div class="col-48 pad-1 left">
                <h4>Check the fluids</h4>
                <p>There are various fluids which you should keep in your mind, just concern regarding the fluid levels which helps your motor run smoothly.</p>
                <ul>
                    <li>Engine Oil</li>
                    <li>Power Steering Fuel</li>
                    <li>Brake Fluid</li>
                    <li>Washer Fluid</li>
                </ul>
            </div> 
            <div class="col-48 pad-1 left">
                <h4>Carry your automotive tools at all times</h4>
                <p>You don`t know when you have a requirement for automotive tools urgently. Sometimes people fall into problems while driving a motor, and these tools help them to come out from those problems.</p>
                <h4>Buy High-Quality Engine Oil</h4>
                <p>Different engine station has a different quality fuel, try to find which one is giving high-quality fuel, it helps your engine to work smoothly and long-term.</p>
            </div> 
        </div>
        <div class="none"></div>
        <center><h1 class="blue">Benefits of Maintaining Your Car</h1></center>
        <div class="col-31 pad-1 left">
            <div class="row">
                <h4>Enhance Your safety</h4>
                <p>Maintaining your car in a good condition helps you drive smoothly, while driving smoothly chances of road accidents and unhappening events reduce and save your life.</p>
            </div> 
            <div class="row">
                <h4>Reliability and Performance</h4>
                <p>While maintaining your car properly, helps your vehicle in giving an extraordinary performance on the road. Have you noticed, without a maintenance there is complete decline in the performance? It`s better to maintain your motor in good condition.</p>
            </div> 
            <div class="row">
                <h4>Save Repair Cost</h4>
                <p>The repair cost of a vehicle is always too expensive. If your vehicle is not working properly it will cost heavily. Prevent your motor from wear and tear, leakages, proper installation of accessories.</p>
            </div> 
        </div>

        <div class="col-31 pad-1 left">
            <img src="car.png"></img>
        </div>

        <div class="col-31 pad-1 left">
            <div class="row">
                <h4>Long Term Access</h4>
                <p>Proper preservation of your car helps you in accessing your motor in the long term. You can enjoy the longevity while keeping your vehicle in good condition.</p>
            </div> 
            <div class="row">
                <h4>Environment Friendly</h4>
                <p>Your car will be an example for those who are not taking too much interest in making the environment healthy. If your motor is in good condition, you are already contributing to society.</p>
            </div> 
            <div class="row">
                <h4>Reduce Roadside Emergencies</h4>
                <p>Suddenly Breakdowns in the middle of the road frustrate you, sometimes overheating problems, and in last you have no choice to go to the service station which heavily costs you.</p>
            </div> 
        </div>
        
    <!-- -------------------------       info  end          ---------------------------    -->
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