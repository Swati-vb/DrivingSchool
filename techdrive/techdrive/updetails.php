<?php 
        session_start(); 
        require_once "functions.php" ;
        $con=connect_my_db();
    
        $result=mysqli_query($con,"SELECT * FROM users where id=".$_SESSION['userid']);
        
        if(mysqli_error($con))      
        echo "<br>Error = ".mysqli_error($con);

     
    if(isset($_POST['edit'])) // when click on Update button
      {
        $add=$_POST['add'];
        $addd = $_POST['addd'];
        $pno = $_POST['pno'];
        $email = $_POST['email'];

        $edit = mysqli_query($con,"UPDATE details SET `add`='$add',addd='$addd',pno='$pno',email='$email' where id='1'"); 
        
          if($edit)
          {
              mysqli_close($con); // Close connection
              header("location:updetails.php"); // redirects to all records page
              exit;
          }
          else
          {
              echo mysqli_error($con);
          }    	
      }
      if(isset($_POST['dash'])) 
      {
          header('Location: dash.php');
      }

      if(isset($_POST['logout'])) 
      {
          session_destroy();
          header('Location: index.html');
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Update - Info</title>    

    <style>
      * { box-sizing: border-box; }
      body,html{margin:0;color:white; background-image:url('blackbg.jpg'); background-size:cover;position:center; height:100%;width:100%;}
      .button{border:none; padding:2%; color:red; background-color: wheat; font-weight: bold; border-radius:15px;  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);}
      .button:hover{color:blue; background-color:tan}
      .h1{ color:white; border-radius:15px; text-align: center;}
      input[type=text],[type=number], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; }
      label { padding: 12px 12px 12px 0; display: inline-block; }    
      .container { border-radius: 5px; padding: 20px; padding-left: 5%; }
      .col-15 { float: left; width: 15%; margin-top: 6px; }
      .col-65 { float: left; width: 65%; margin-top: 6px; }
      .row:after { content: ""; display: table; clear: both; }
      .right{float:right;} .left{float:left;}
      @media screen and (max-width: 600px) { .col-15, .col-65,input[type=submit] { width: 100%;  margin-top: 10; } select{height:20%;} }
    </style>
  </head>
<body>
  <div class="bg">
    <div class="box">
    <?php    
        if($result && mysqli_num_rows($result)>0)
        {
            $userinfo=mysqli_fetch_assoc($result);
            
            if($userinfo['desg']==2)
            {
      ?>
              <br>  
              <h1 class="h1">Update - Info</h1>
              <form method="post">
                <div>
                    <br>
                    <input type="submit" value="Dashboard" name="dash" class="button left" />
                    <input type="submit" value="logout" name="logout" class="button right" />
                    <br><br><br><br>
                </div>
              </form>  
            <center>
              <form method="post"><br>
                <h4>Admit Student</h4>  
                <div class="row">
                    <div class="col-15">
                      <label for="add">Address</label>
                    </div>
                    <div class="col-65">
                      <input type="text" id="add" name="add" placeholder="Address with city" value="<?php echo $info['add'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-15">
                    <label for="addd">dist, state & pin</label>
                  </div>
                  <div class="col-65">
                    <input type="text" id="addd" name="addd" placeholder="District , state and pincode"value="<?php echo $info['addd'];?>">
                  </div>
                </div>
                <div class="row">
                    <div class="col-15">
                      <label for="pno">Contact Number</label>
                    </div>
                    <div class="col-65">
                      <input type="text" id="pno" name="pno" placeholder="Contact Number" value="<?php echo $info['pno'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-15">
                    <label for="email">E-mail Id</label>
                  </div>
                  <div class="col-65">
                    <input type="text" id="email" name="email" placeholder="E-mail Id" value="<?php echo $info['email'];?>">
                  </div>
                </div>
                <div class="row">
                    <br><br>
                  <input type="submit" value="Update" name="edit" class="button" /> &nbsp;
                </div><br><br>
              </form>
            </center>
      <?php
            }
        }
        else header('Location: login.php');
      ?>
    </div>
  </div>
</body>
</html>