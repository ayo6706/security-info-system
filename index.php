 <?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


 ?>  
<?php include 'dbconnect.php'?>
<?php include 'login.php'?>  
<!doctype html>
<html lang="en">
<?php

                        
                        $message = '';
                        
                         if (isset($_POST["submitLogin"])) {

                          $submitOfficerBadgeNo = $_POST['submitBadgeNum'];
                          $submitOfficerPassword = md5($_POST['submitOfficerPass']);


                          $query = "SELECT * FROM officer WHERE badgeNo='$submitOfficerBadgeNo' AND password = '$submitOfficerPassword'";
                          $result = mysqli_query($link, $query); // here $dbc is your mysqli $link
                          $row  = mysqli_fetch_array($result);
                          if(is_array($row)) {
                             if(!isset($_SESSION)) 
                              { 
                                  session_start(); 
                              } 
                          $_SESSION["id"] = $row['s/n'];
                          $_SESSION["fname"] = $row['first_name'];
                          $_SESSION["lname"] = $row['last_name'];
                          $_SESSION["phone"] = $row['phone_number'];
                          $_SESSION["badgeNo"] = $row['badgeNo'];
                          $_SESSION["password"] = $row['password'];
                          $_SESSION["Address"] = $row['Address'];
                          $_SESSION["photo"] = $row['photo'];
                          $_SESSION["loggedIn"] = true;
                          $_SESSION["name"] = $_SESSION["fname"].' '.$_SESSION["lname"];
                          $sname = $_SESSION["name"];
                            if($_SESSION["name"]) {
                            ?>
                             
                            <?php
                            }
                          } else {
                            $message = 'Invalid Badge Number/Password';
                            
                          }
                          
                         
                        }
                          
                          
                        
                      
                      ?>

<head>
  <title>Crime Log - Security Infosystem</title>
  <script src="gen_validatorv4.js" type="text/javascript"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>
 <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <img src="images/Police-logo.jpg" width="200px">
        </a>
        <a href="" class="simple-text logo-normal">
          Security Info System
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.php">
              <!-- <i class="material-icons">dashboard</i>-->
            <?php  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){echo '<p>My Profile</p>';}else{echo '<p>Log In</p>';}?>
            </a>
          </li>
           <li class="nav-item   ">
              <?php  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
                  echo'
                  <a class="nav-link" href="./crimeLog.php">
                    <!-- <i class="material-icons">dashboard</i>-->
                    <p>View Crime Log</p>
                  </a>
                ';
              }else{echo '';}
             ?>
          </li>
          <li class="nav-item ">
            <?php  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
                echo '
                  <a class="nav-link" href="./caseLogger.php">
                    <!-- <i class="material-icons">dashboard</i>-->
                    <p>Create a Case</p>
                  </a>
                ';
              }else{echo '';}
             ?>
            
          </li>
          <li class="nav-item   ">
            <?php  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
                echo '
                  <a class="nav-link" href="./crimeDatabase.php">
                    <!-- <i class="material-icons">dashboard</i>-->
                    <p>Search Crime Database</p>
                  </a>
                ';
              }else{echo '';}
             ?>
            
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <!-- class="navbar-brand"  -->
                 <?php echo'<p>'.$message.'</p>';?>   
         
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
               
              </li>
              <!-- your navbar here -->
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <!--<i class="material-icons">notifications</i> Notifications-->
                </a>
              </li>
              <li class="nav-item">
                <?php
                if(isset($_SESSION["name"])){
                            ?>
                              Welcome <?php echo $_SESSION["name"]; ?>. Click here to &nbsp;<a href="logout.php" tite="Logout">Logout.</a>
                            <?php
                          }else{
                          }
                          ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="row">
            <div class="col-md-12">
              
            </div>
          </div>

              <?php 
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
                  echo'
                <div class="row">
                  <div class="col-md-12">
                      <div class="card card-profile">
                  
                 
                            <div class="card-avatar">
                              <a href="#pablo">
                                <img class="img" src="images/';
                                   
                                  if(isset($_SESSION["photo"])){
                                    echo $_SESSION["photo"];
                                  } 
                                echo '
                                " />
                              </a>
                            </div>
                            <div class="card-body">
                              <h6 class="card-category text-gray">Officer Profile</h6>
                              <h4 class="card-title">';
                                 if(isset($_SESSION["name"])){
                                    echo $_SESSION["name"];
                                  }
                              echo '</h4>
                              <p class="card-description">
                                Phone Number: ';
                                  if(isset($_SESSION["phone"])){
                                    echo $_SESSION["phone"];
                                  }
                              echo '
                              </p>
                              <p class="card-description">
                                Address: '; 
                                  if(isset($_SESSION["Address"])){
                                    echo $_SESSION["Address"];
                                  }
                              echo'
                              </p>
                              
                            </div>
                          </div>
                        </div>
                      </div>';
                    }
                  ?>

            <?php 
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
            }else{

              echo '

            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Login</h3>
                  <p class="card-category"></p>

                </div>
                <div class="card-body">
                  <form id="loginForm" action="#" method="post" accept-charset="UTF-8">
                    <input type="hidden" name="submittedLoginForm" id="submittedLoginForm" value="1"/>
                    

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4></h4> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Officer Badge Number </label>
                          <input type="text" class="form-control" name="submitBadgeNum" id="submitBadgeNum">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password </label>
                          <input type="password" class="form-control" name="submitOfficerPass" id="submitOfficerPass">
                        </div>
                      </div>
                    </div>
                     <div class="rom">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" name="submitLogin" id="submitLogin">Login</button>
                      </div>
                      <script type="text/javascript">
                        var loginfrmvalidator  = new Validator("loginForm");
                        loginfrmvalidator.addValidation("badgeNum","req","Please enter your Badge Number");
                        loginfrmvalidator.addValidation("officerPass","req","Please enter your password");
                      </script>
                      

                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>';

        }
        ?>
            <?php
            if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
              echo'
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h3 class="card-title">Edit Profile</h3>
                              <p class="card-category"></p>
                            </div>';
                            
                              if (! empty($errorMessage) && is_array($errorMessage)) {
                               echo '
                                  <div class="error-message">';
                                 
                                    foreach($errorMessage as $message) {
                                      echo $message . "<br/>";
                                    }
                                echo '
                                  </div>
                                ';
                              }
                            echo'
                            <div class="card-body">
                              <form id="EditProfileForm" action="#" method="post" accept-charset="UTF-8">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <h4></h4> 
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last name </label>
                                      <input type="text" class="form-control" id="editLastName" name="editLastName" >
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">First name </label>
                                      <input type="text" class="form-control" id="editFirstName" name="editFirstName">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Phone Number</label>
                                      <input type="password" class="form-control" id="editPhoneNo" name="editPhoneNo">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Officer Photo</label>
                                        <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg" name="editAddPhoto">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Address</label>
                                      <input type="password" class="form-control" id="editAddress" name="editAddress">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Badge Number</label>
                                      <input type="text" class="form-control" id="editBadgeNo" name="editBadgeNo">
                                    </div>
                                  </div>
                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Password</label>
                                      <input type="password" class="form-control" id="editPassword" name="editPassword">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <button type="submit" class="btn btn-primary pull-right" id="editProfBtn" name="editProfBtn">Edit Profile</button>
                                    </div>
                                  </div>
                                </div>
                                 <div class="rom">
                                  
                                </div>
                                <div class="clearfix"></div>
                                
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      ';
                  }
          ?>

         <?php
         if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
            echo '
                 <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h3 class="card-title">Add Officer</h3>
                  <p class="card-category"></p>
                   
                </div>
                <div class="card-body">
                  <form id="AddOfficerForm" action="#" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4>Register Officer</h4> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last name </label>
                          <input type="text" class="form-control" id="officerlName" name="officerlName" required="yes">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First name </label>
                          <input type="text" class="form-control" id="officerfName" name="officerfName" required="yes">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone Number</label>
                          <input type="number" class="form-control" id="officerPhone" name="officerPhone" required="yes">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group">
                            <label class="bmd-label-floating">Officer Photo</label>
                            <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/Jpg,image/JPG" name="addPhoto" id="addPhoto" required="yes">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" id="officerAdd" name="officerAdd" required="yes">
                         
                        </div>

                      </div>
                    </div>
                    <div class="row">
                       
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Badge Number</label>
                          <input type="text" class="form-control" id="officerBadgeNo" name="officerBadgeNo" required="yes">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" id="officerPass" name="officerPass" required="yes">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right" id="AddOfficerBtn" name="AddOfficerBtn">Add Officer</button>
                        </div>
                      </div>
                    </div>';
                      
                        if (isset($_POST["AddOfficerBtn"])) {

                      $target_dir = "images/";
                      $target_file = $target_dir . basename($_FILES["addPhoto"]["name"]);
                      $uploadOk = 0;
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      // Check if image file is a actual image or fake image
                      if(isset($_POST["AddOfficerBtn"])) {
                          $check = getimagesize($_FILES["addPhoto"]["tmp_name"]);
                          if($check !== false) {
                              echo "File is an image - " . $check["mime"] . ".";
                              $uploadOk = 1;
                          } else {
                              echo "File is not an image.";
                              $uploadOk = 0;
                          }
                      }
                      if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                      // if everything is ok, try to upload file
                      } else {
                          if (move_uploaded_file($_FILES["addPhoto"]["tmp_name"], $target_file)) {
                              echo "The file ". basename( $_FILES["addPhoto"]["name"]). " has been uploaded.";
                              $photo = basename( $_FILES["addPhoto"]["name"]);
                          } else {
                              echo "Sorry, there was an error uploading your file.";
                          }
                      }

                          $officerLastName = $_POST['officerlName'];
                          $officerFirstName = $_POST['officerfName'];
                          $officerPhoneNumber = $_POST['officerPhone'];
                          $officerAddress = $_POST['officerAdd'];
                          $officerBadgeNo = $_POST['officerBadgeNo'];
                          $officerPassword = md5($_POST['officerPass']);


                          $query = "SELECT * FROM officer WHERE badgeNo='$officerBadgeNo'";
                          $result = mysqli_query($link, $query); // here $dbc is your mysqli $link
                          if(mysqli_num_rows($result)>=1)//You are mixing the mysql and mysqli, change this line of code
                           {
                            echo"<p> An officer with this badge number already exists</p>";
                           }
                         else
                            {  
                              $query = "INSERT INTO officer (last_name,first_name,phone_number,Address,badgeNo,password,photo) VALUES ('$officerLastName','$officerFirstName','$officerPhoneNumber','$officerAddress','$officerBadgeNo','$officerPassword','$photo')";

                              if(mysqli_query($link,$query)){
                              echo '<p>Officer '.$officerLastName.' Added</p>';
                              }
                            }
                        }
                     echo '
                    
                  </form>
                </div>
              </div>
            </div>
            
              </div>
                 
            ';
          }
            ?>
        
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="">
                  Enenche Samuel Ondugbe
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script><i class="material-icons"></i> 
           Final Year Project Designed by ayomide onibokun (vadton tech)
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>