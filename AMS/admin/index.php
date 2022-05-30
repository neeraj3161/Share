<?php

session_start();

if(!isset($_SESSION['adminName'])){
    ?>
    
    <script>alert("You are logged out!!")</script>
    <?php
    header('location:/AMS/test.php');
}


?>


<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body style=" background-image: url('blur-back.png');
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;">
    
  <!-- designing our admin page -->


  <div class="navbar">
  <a href="/AMS/ADMIN/index.php">Home</a>
        
        <a href="/AMS/ADMIN/customerSection.php" class="nav-links"  >Customer section</a>

        <a href="/AMS/ADMIN/staffSection.php" ">Staff section</a>
        <a href="/AMS/ADMIN/alogout.php">Logout</a>

</div>




<div class="options">
        
  
      
    
  <div class="optionss">
    
  
   <a class="ahead" href="/AMS/ADMIN/serviceListAdmin.php">
       <div class="add-staff staff">
           <img class="add" src="settingss.png" alt="">
       
           <h2 class="add-staff-text">Services</h2>
       </div>
   </a>


       <a class="ahead" href="/AMS/ADMIN/adminAssignService.php">
           <div class="add-staff staff">
               <img class="add" src="list.png" alt="">
           
               <h2 class="add-staff-text">Assign Service</h2>
           </div>
       </a>

       <br>
       <br>
   </a>


   <a class="ahead" href="addStaffPage.html">
       <div class="add-staff staff">
           <img class="add" src="report.png" alt="">
       
           <h2 class="add-staff-text">Statistics</h2>
       </div>
   </a>
   <br>
       <br>
       <br>
       <br>
       <br>
       <br>
   
   </div>


     </div>

  <script src="app.js"></script>
  </body>
  </html>