<?php 
        session_start(); 
        require_once "functions.php" ;
        $con=connect_my_db();
    
        $result=mysqli_query($con,"SELECT * FROM users where id=".$_SESSION['userid']);
        
        if(mysqli_error($con))      
        echo "<br>Error = ".mysqli_error($con);

      if(isset($_POST['search']))
      {
        $rno=$_POST['searchid'];
      }
      if(isset($_POST['admit']))
      {		
          $sid=$_POST['sid'];
          $rno = $_POST['rno'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $gender = $_POST['gender'];
          $dob = $_POST['dob'];
          $sno = $_POST['sno'];
          $adrs = $_POST['adrs'];
          $ano = $_POST['ano'];
          $email = $_POST['email'];
          
          $insert = "INSERT INTO learner( rno,fname,lname,gender,dob,sno,adrs,ano,email) VALUES ( '$rno','$fname','$lname','$gender', '$dob','$sno','$adrs','$ano','$email')";
          $insert=mysqli_query($con,$insert);
          if(!$insert)
          {
              echo mysqli_error($con);
          }
          else
          {
            $sid=mysqli_insert_id($con);
              mysqli_close($con); // Close connection
          }

      }
    if(isset($_POST['edit'])) // when click on Update button
      {
        $sid=$_POST['sid'];
        $rno = $_POST['rno'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $sno = $_POST['sno'];
        $adrs = $_POST['adrs'];
        $ano = $_POST['ano'];
        $email = $_POST['email'];

        $edit = mysqli_query($con,"update learner set rno='$rno', fname='$fname' ,lname = '$lname',gender = '$gender',dob = '$dob',sno = '$sno',adrs = '$adrs',ano = '$ano', email = '$email' where sid = $sid"); 
        
          if($edit)
          {
              mysqli_close($con); // Close connection
              header("location:learner.php"); // redirects to all records page
              exit;
          }
          else
          {
              echo mysqli_error($con);
          }    	
      }
    if(isset($_POST['delete'])) // when click on Update button
      {
        $sid = $_POST['sid'];
        $del = mysqli_query($con,"delete from learner where sid = $sid"); // delete query 
        if($del)
        {
            mysqli_close($con); // Close connection
            header("location:learner.php"); // redirects to all records page
            exit;	
        }
        else
        {
            echo "Error deleting record"; // display error message if not delete
        }
      }
    if($rno>0)
      {
        $query=mysqli_query($con,"SELECT * FROM  learner WHERE rno=$rno");
        if($query && mysqli_num_rows($query)>0)      
        $info=mysqli_fetch_assoc($query);
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
    <title>Learner - Info</title>    

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
              <h1 class="h1">Learner - Info</h1>
              <form method="post">
                <div>
                    <br>
                    <input type="submit" value="Dashboard" name="dash" class="button left" />
                    <input type="submit" value="logout" name="logout" class="button right" />
                    <br><br><br><br>
                </div>
            </form>  
              <center>
                  <h4>Search & Update</h4>
                  <div class="container">
                    <form method="post">
                      <div class="row" style="display:none;">
                        <div class="col-15">
                          <label for="sid">Id</label>
                        </div>
                        <div class="col-65">
                          <input type="number" id="sid" name="sid" placeholder="ID" value="<?php echo $info['sid']; ?>" readonly/>
                        </div> 
                      </div>  
                      <div class="row">
                        <div class="col-15">
                          <label for="searchid">Search Reg No</label>
                        </div>
                        <div class="col-65">
                          <input type="number" id="searchid" name="searchid" placeholder="Search to Update/Delete data" value="<?php echo $info['rno']; ?>"  />
                        </div> 
                      </div><br>
                        <input type="submit" value="Search" name="search" class="button" />                
                      <hr><br>
                      <h4>Admit Student</h4>  
                      <div class="row">
                          <div class="col-15">
                            <label for="rno">Register Number</label>
                          </div>
                          <div class="col-65"> 
                            <input type="number" id="rno" name="rno" placeholder="Register Number" value="<?php echo $info['rno'];?>">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                            <label for="fname">First Name</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="fname" name="fname" placeholder="First Name" value="<?php echo $info['fname'];?>">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                          <label for="lname">Last Name</label>
                        </div>
                        <div class="col-65">
                          <input type="text" id="lname" name="lname" placeholder="Last Name"value="<?php echo $info['lname'];?>">
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                            <label for="gender">Gender</label>
                          </div>
                          <div class="col-65">
                            <select>
                              <option selected disabled>Select Gender</option>
                              <option id="gender" name="gender" value="1"<?php echo ($info['gender']==1?'selected="selected"':''); ?>>Male</option>
                              <option id="gender" name="gender" value="0"<?php echo ($info['gender']==0?'selected="selected"':''); ?>>Female</option>           
                            </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                            <label for="dob">Date of Birth</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="dob" name="dob" placeholder="YYYY-MM-DD"value="<?php echo $info['dob'];?>">
                          </div>
                      </div>                     
                      <div class="row">
                          <div class="col-15">
                            <label for="sno">Contact Number</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="sno" name="sno" placeholder="Contact Number"value="<?php echo $info['sno'];?>">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                            <label for="adrs">Address</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="adrs" name="adrs" placeholder="address" style="height:100px"value="<?php echo $info['adrs'];?>"></input>
                          </div>
                      </div>                     
                      <div class="row">
                          <div class="col-15">
                            <label for="ano">Adhar Number</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="ano" name="ano" placeholder="Adhar Number"value="<?php echo $info['ano'];?>">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-15">
                            <label for="email">E-mail</label>
                          </div>
                          <div class="col-65">
                            <input type="text" id="email" name="email" placeholder="E-mail"value="<?php echo $info['email'];?>">
                          </div>
                      </div>
                      <div class="row">
                          <br><br>
                        <input type="submit" value="Admit" name="admit" class="button" /> &nbsp;
                        <input type="submit" value="Update" name="edit" class="button" /> &nbsp;
                        <input type="submit" value="Delete" name="delete" class="button" /> &nbsp;
                      </div><br><br>
                    </form>
                  </div>
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