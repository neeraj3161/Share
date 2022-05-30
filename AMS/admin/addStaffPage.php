<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add staff</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function verifyData(){
            var psw=document.querySelector(".pass").value;  
            var pswr = document.querySelector(".repass").value;
            var name = document.querySelector(".fname").value;
            var cityName= document.querySelector(".c").value;
            var stateName= document.querySelector(".s").value;


      
            //below lines check if the name is a string
            if(!isNaN(name)){
                alert("Enter a valid name!!!");
                return false;
            }
            if(!isNaN(cityName)){
                alert("Enter a valid city name!!!");
                return false;
            }
            if(!isNaN(stateName)){
                alert("Enter a valid state name!!!");
                return false;
            }
            if(psw!=pswr){
                alert("Password is not matching!!")
                return false;
            }

            
        }
    </script>
</head>
<body style=" background-image: url('blur-back.png');
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;">

    <div class="navbar">
        <a href="/AMS/ADMIN/index.php">Home</a>
        
        <a href="/AMS/ADMIN/customerSection.php" class="nav-links"  >Customer section</a>

        <a href="/AMS/ADMIN/staffSection.php" ">Staff section</a>
        <a href="#news">Logout</a>
</div>


<div class="form-add">
    
    <h1 class="info-head add-t">Add staff</h1>

    <form action="/AMS/ADMIN/newMemberAdd.php" method="post" style="text-align: center;" onsubmit=" return verifyData()">
            <input class="input fname" name="name" type="text" placeholder="Enter full name" required><br>
            <input class="input" name="email" type="email" placeholder="Enter email address" required><br>
            <input class="input" name="phone" type="number" placeholder="Enter phone number" required><br>
            <label for="">Gender: </label>
            <input class="radio" name="gender" value="Male" type="radio"><label for="">Male</label>
            <input class="radio" name="gender" value="Female" type="radio"><label for="">Female</label><br>
            <label class="dob" for="">Select DOB: </label><br>
            <input name="dob" class="input DOB" type="date" required><br>
            <input name="address" class="input" type="text" placeholder="Enter complete address" required><br>
            <input name="zip" class="input" type="number" placeholder="ZIP CODE" required><br>
            <input name="city" class="input c" type="text" placeholder="Enter city name" required>
            <input name="state" class="input s" type="text" placeholder="Enter state name" required><br>




            <input name="pass" class="input pass" type="password" placeholder="create password" required><br>
            <input name="repass" class="input repass" type="password" placeholder="confirm password"  required><br>
            
            <button class="btn" type="reset">Reset form</button>
            <button class="btn sub" type="submit">Submit</button>
    </form>
</div>
      
</body>
</html>