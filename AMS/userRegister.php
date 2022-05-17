




<?php 
$name = $_POST["name"];
$surname=$_POST["surname"];
$phone=$_POST["ph_no"];
$email=$_POST["email"];
$password=$_POST["psw"];

$strno = strval($phone);


$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      echo "Registration successfull\n";

$query = "INSERT INTO ams.users (name,surname,phone,email,password) VALUES ('$name','$surname','$strno','$email','$password')";
$result = pg_query($query); 

    

	}else{
    echo "Not connected";
  }




?>