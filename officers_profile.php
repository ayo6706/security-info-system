<?php session_start(); ?>  
<?php include 'dbconnect.php'?>
<?php include 'login.php'?>



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


<?php
     $vad=$_GET['vad'];
                  $query = "SELECT * FROM officer where badgeno='$vad'";
			if ($result = mysqli_query($link, $query)){
			     while ($row=mysqli_fetch_assoc($result)) {
	

				
				$first_name = $row['first_name'] ;
				$last_name = $row['last_name'];
				$phone= $row['phone_number'] ;
				$photo = $row['photo'] ;
				$badgeNo = $row['badgeNo'] ;
				$Address = $row['Address'] ;
				
				
				}
				
				
				
				
				}?>
				
			
				
				
				
				
				
				
<!doctype html>
<html lang="en">

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
 
 <link href='assets/css/bootstrap.css' rel='stylesheet' />
 <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
 
 <!--     <link href='css/ct-navbar.css' rel='stylesheet' /> -->
 <link href='assets/css/rotating-card.css' rel='stylesheet' />
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
      
         
      
         
         
			<div class="card-container">
			<div class="card">
			<div class="front">
			<div class="cover">
			<img src="images/rotating_card_thumb3.png"/>
			</div>
			<div class="user">
			<img class="img-circle" src="images/rotating_card_profile.png"/>
			</div>
			<div class="content">
			<div class="main">
			<h3 class="name">Name: <?php echo $first_name.' '.$last_name;?></h3>
			<p class="profession">BadgeNo: <?php echo $badgeNo;?></p>
			
			<p class="text-center">Phone Number: "<?php echo $phone; ?>"</p>
			</div>
			<div class="footer">
			<div class="rating">
			<i class="fa fa-mail-forward"></i> Auto Rotation
			</div>
			</div>
			</div>
			</div> <!-- end front panel -->
			<div class="back">
			 <!-- end back panel -->
			</div> <!-- end card -->
			</div> <!-- end card-container -->
           
       
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
 
 
 
 <script type="text/javascript">
 $().ready(function(){
 $('[rel="tooltip"]').tooltip();
 
 $('a.scroll-down').click(function(e){
 e.preventDefault();
 scroll_target = $(this).data('href');
 $('html, body').animate({
 scrollTop: $(scroll_target).offset().top - 60
 }, 1000);
 });
 
 });
 
 function rotateCard(btn){
 var $card = $(btn).closest('.card-container');
 console.log($card);
 if($card.hasClass('hover')){
 $card.removeClass('hover');
 } else {
 $card.addClass('hover');
 }
 }
 
 
 </script>
 
</body>

</html>