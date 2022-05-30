<?php

session_start();

if(!isset($_SESSION['username'])){
    ?>
    
    <script>alert("You are logged out!!")</script>
    <?php
    header('location:/AMS/test.php');
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style=" background-image: url('backk-cust.png');
background-repeat: no-repeat;
background-position: center;
  background-size: cover;
height: 100%;">
    
</body>

<div class="navbar">
    <div class="navbar">
      <a href="/AMS/ADMIN/customerHome.php">Home</a>
      
        <a href="/AMS/ADMIN/yourServicesPage.php" class="nav-links"  >Your Services</a>
        <a href="" >Profile</a>
        <a href="/AMS/ADMIN/clogout.php">Logout</a>


</div>



</div>


<div class="intro">
    <h1 class="info-head hh">Welcome, <?php echo $_SESSION['username'] ?></h1>
</div>

<div class="options">
    

  

    <div class="optionss">
    
     <a class="ahead" href="\AMS2\addService.html">
         <div class="add-staff staff hhh">
             <img class="add" src="plus.png" alt="">
         
             <h2 class="add-staff-text">New Service</h2>
         </div>
     </a>

     <br>
     <br>
     <br>
 
 
         <a class="ahead" href="addStaffPage.html">
             <div class="add-staff staff">
                 <img class="add" src="car-insurance.png" alt="">
             
                 <h2 class="add-staff-text">     Buy Insurance</h2>
             </div>
         </a>
     


         
         <a class="ahead" href="addStaffPage.html">
            <div class="add-staff staff">
                <img class="add" src="member-card.png" alt="">
            
                <h2 class="add-staff-text">     Membership Info</h2>
            </div>
        </a>

     </div>
 
 
       </div>
</html>