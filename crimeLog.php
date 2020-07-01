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
  <title>Crime Log - Security Infosystem</title>
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
           <li class="nav-item active  ">
            <a class="nav-link" href="./crimeLog.php">
              <!-- <i class="material-icons">dashboard</i>-->
              <p>View Crime Log</p>
            </a>
          </li>
          <li class="nav-item ">
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
            <a class="navbar-brand" href="#pablo">Crime Log</a>
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
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">02-07-2019</h4>
                  <p class="card-category"> Crime log of the day</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                      	<th>
                      	 Nos
                      	</th>
                        <th>
                          Case No
                        </th>
                      
                       
                        <th>
                        Location
                        </th>
                        <th>
                          Officer in charge
                        </th>
                        <th>
                        	Incidence
                        </th>
                        <th>
                             Case Summary
                        </th>
                        <th>
                        	Date
                        </th>
                      </thead>
                      <tbody>
                      
                      
                      <?php
                     
                    
                      
                      $query = "SELECT * FROM records";
                      $nos = 1;
                      if ($result = mysqli_query($link, $query)){
                      while ($row=mysqli_fetch_assoc($result)) {
                      echo'
                      
                       
                      
                        <tr>
                          <td>'.$nos++.'</td>
                          <td>
                            '.$row["s_n"].'
                          </td>
                        
                          <td>
                          '.$row["incidence_location"].' 
                          </td>
                          <td><a href="officers_profile.php?id='.$row["officer_in_charge"].'"> 
                          '.$row["officer_in_charge"].' </a>
                          </td>
                          <td>
                            '.$row["incidence_title"].'
                          </td>
                          <td class="text-primary" >
                            <a href="crimeLog_post.php?id='.$row["s_n"].'"> '.$row["statement_of_incidence"].'</a>
                          </td>
                          <td>
                            '.$row["incidence_time"].'
                          </td>
                        </tr>';
                        
                     }
                        
                  }
                        
                        ?>
                        
                      
                       
                        
                        
                      </tbody>
                    </table>
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
</body>

</html>