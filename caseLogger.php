 <?php session_start(); ?>  
<?php include 'dbconnect.php'?>
<?php include 'login.php'?>
<!doctype html>
<html lang="en">



<?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


 ?> 
<?php 
  
  if (!isset($_SESSION['loggedIn'])) {
  header("location: index.php");
  }
  ?>

<head>
  <title>Create Case - Security Infosystem</title>
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
           <li class="nav-item   ">
            <a class="nav-link" href="./index.php">
              <!-- <i class="material-icons">dashboard</i>-->
               <?php  if ($_SESSION['loggedIn'] == true){echo '<p>My Profile</p>';}else{echo '<p>Log In</p>';}?>
            </a>
          </li>
           <li class="nav-item   ">
            <a class="nav-link" href="./crimeLog.php">
              <!-- <i class="material-icons">dashboard</i>-->
              <p>View Crime Log</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./caseLogger.php">
              <!-- <i class="material-icons">dashboard</i>-->
              <p>Create a Case</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="./crimeDatabase.php">
              <!-- <i class="material-icons">dashboard</i>-->
              <p>Search Crime Database</p>
            </a>
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
            <a class="navbar-brand" href="#pablo">Case Logger</a>
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
                <a class="nav-link" href="#pablo">
                  <!--<i class="material-icons">notifications</i> Notifications-->
                </a>
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
                              Welcome <?php echo $_SESSION["name"];  ?>. Click here to &nbsp;<a href="logout.php" tite="Logout">Logout.</a>


                            <?php
                            $officername = $_SESSION["badgeNo"];
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
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">New Case</h4>
                  <p class="card-category">Complete the filling form</p>
                </div>
                <div class="card-body">
                  <form  id="CaseForm" action="#" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4>Victim / Complainer's Details</h4> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" required="yes" name="compLName">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" required="yes" name="compFName">
                        </div>
                      </div>
                     </div>
                       
                 


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone No</label>
                          <input type="number" class="form-control" required="yes" name="compPhone">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control" required="yes" name="compAddress">
                        </div>
                      </div>
                    </div>
                      
                    
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <h4>Statement of incidence</h4>
                            <textarea class="form-control ckeditor" rows="15" placeholder="Give a detailed explanation of the incident" id="editor1" required="yes" name="compStatement"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h4>Summary of Statement</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6"> 
                        <div class="form-group">
                          <label class="bmd-label-floating">Incidence</label>
                          <input type="text" class="form-control" required="yes" name="caseIncidence">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Location </label>
                            <input type="text" class="form-control" required="yes" name="caseLocation">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Exact time </label>
                            <input type="datetime-local" class="form-control" required="yes" name="caseTime">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h4>Suspect details</h4>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control"  name="susp1LName">
                      </div>
                      <div class="col-md-6">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control"  name="susp1FName">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control" name="susp1Address">
                      </div>
                      <div class="col-md-4">
                        <label class="bmd-label-floating">Phone Number</label>
                        <input type="text" class="form-control" name="susp1Phone">
                      </div>
                    </div>
                    <div class="rom">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" name="createCaseBtn">Create Case</button>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php

                        
                        $message = '';
                        
                         if (isset($_POST["createCaseBtn"])) {

                      
                          
                          $compLastName = $_POST['compLName'];
                          $compFirstName = $_POST['compFName'];
                          $compPhoneNumber = $_POST['compPhone'];
                          $compAddress = $_POST['compAddress'];
                          $compStatement = $_POST['compStatement'];
                          $caseIncidence = $_POST['caseIncidence'];
                          $caseLocation = $_POST['caseLocation'];
                          $caseTime = $_POST['caseTime'];
                          $susp1LName = $_POST['susp1LName'];
                          $susp1FName = $_POST['susp1FName'];
                          $susp1Address = $_POST['susp1Address'];
                          $susp1Phone = $_POST['susp1Phone'];
                          $officername;

                         

                           
                              $query = "INSERT INTO records (complainer_lastName,complainer_firstName,complainer_phoneNo,complainer_address,statement_of_incidence,incidence_title,incidence_location,incidence_time,suspect1_lastName,suspect1_firstName,suspect1_phoneNo,suspect1_address, officer_in_charge) VALUES ('$compLastName','$compFirstName','$compPhoneNumber','$compAddress','$compStatement','$caseIncidence','$caseLocation','$caseTime','$susp1LName','$susp1FName','$susp1Phone','$susp1Address','$officername')";

                              if(mysqli_query($link,$query)){
                              echo '<p>Case '.$caseIncidence.' Added</p>';
                              }
                            
                        }
                          
                          
                        
                      
                      ?>

                  </form>
                </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
            
        
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
           Final Year Project
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  
  
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
</body>

</html>