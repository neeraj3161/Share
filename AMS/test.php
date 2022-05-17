<?php
	$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      // echo "connected\n";
      $result = pg_query($con,"select * from ams.admin");

      while ($row=pg_fetch_object($result)){
        // echo "\n".$row->password;
      }

	}else{
    // echo "Not connected";
  }

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automobile Management Service</title>
  <link rel="stylesheet" href="styleHome.css">

  



  <script>
    function verifyDataAdmin(){
      var username=document.querySelector(".uad").value;  
      var password = document.querySelector(".pwdad").value;


      if(username.length<2){
        alert("Enter a valid username");
        return false;

      }else if(password.length<2){
        alert("Password cannot be empty");
        return false;
      }





     


    }


    function verifyDataUser(){
      var username=document.querySelector(".uname").value;  
      var password = document.querySelector(".psw").value;


      if(username.length<2){
        alert("Enter a valid username");
        return false;

      }else if(password.length<8){
        alert("Invalid password");
        return false;
      }





     


    }
  </script>



</head>
<body>

  <div class ="nav" >
    <!-- creating a unordered list -->


    <ul class="ul">
      <li><a class="nav-links" href="#hme">Home</a></li>
      <li><a class="nav-links" href="">Services</a></li>
      <li><a class="nav-links"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;">User Login</a></li>
      <li><a class="nav-links"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Admin Login</a></li>
      <li><a class="nav-links"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Staff Login</a></li>
      <li><a class="nav-links" href="#abt">About us</a></li>
      <li class= "contact"><a  class="nav-links" href="#cont">Contact us</a></li>

    </ul>
  </div>

 


 
  <div class="intro-mobile" id="hme">
      <img class="logo" src="maintenance.png" alt="">
      <h1 class="head1">Automobile Management Service </h1><br><h6 class="info-para" style="    font-family: 'Open Sans', sans-serif;">We do all kind of vehicle services</h6>

    
  </div>




<div id="id01" class="modal">
  
  <form class="modal-content animate"  onsubmit="return verifyDataUser()" action="/AMS/userLogin.php" method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Image" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="uname" class="uname" required autocomplete="on">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" class="psw" required autocomplete="on">
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot password?</a></span>
      <span class="psw"> <a href="userRegister.html">Register</a></span>
    </div>
  </form>
</div>

  


  <!-- staff login page and admin-login page -->

  <div id="id02" class="modal">
  
    <form class="modal-content animate" onsubmit="return verifyDataAdmin()" action="/AMS/admin.php"  method="post" >
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="img_avatar2.png" alt="Image" class="avatar">
      </div>
  
      <div class="container">
        <label for="uname"><b>User Id</b></label>
        <input type="text" placeholder="Enter userId" name="userIdAdmin" class="uad" required autocomplete="on">
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pswAdmin" class="pwdad"  required autocomplete="on">
          
        <button type="submit">Login</button>
        
      </div>
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">Forgot password?</a></span>
      </div>
    </form>
  </div>
  
    <div class="intro" id="hme">
      <table class="center" style="text-align: center;">
        <th class="web-image"><img class="logo" src="maintenance.png" alt=""></th>
        <th class="web-info"><h1>Automobile Management Service </h1><br><h6 class="info-para" style="    font-family: 'Open Sans', sans-serif;">We do all kind of vehicle services</h6></tr></th>
  
      </table>
      
    </div>
  


  <div class="about" id="abt"style="padding-top: 8%;padding-bottom: 8%;padding-left: 5%;padding-right: 5%;">
    <h3 style="text-align: center;">About us</h3>
    <p style="text-align: center;padding-top:3%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius mollitia illo, suscipit veritatis, repudiandae quos quisquam ratione laboriosam totam est, eaque porro earum doloribus voluptas aliquam quae impedit molestiae laborum?</p>
  </div>


  <div class="contact" id="cont" style="padding-top: 8%;padding-bottom: 8%;padding-left: 5%;padding-right: 5%;background-color: #333;">
    <h3 class="cu" style="text-align: center;">Contact us</h3>
    <p class="cu" style="text-align: center;padding-top:3%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius mollitia illo, suscipit veritatis, repudiandae quos quisquam ratione laboriosam totam est, eaque porro earum doloribus voluptas aliquam quae impedit molestiae laborum?</p>

    <footer style="text-align: center; margin-top: 5%;"><h6>&copy; Copyright 2022 Automobile Management Services</h6></footer>
  </div>
 
  

  <script src="home.js"></script>
</body>
</html>