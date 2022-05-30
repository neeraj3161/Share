<?php 
$name = $_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];

$gender=$_POST["gender"];

$city=$_POST["city"];

$state=$_POST["state"];

$pass=$_POST["pass"];

$strno = strval($phone);




$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      echo "Registration successfull\n";

$query = "INSERT INTO ams.customer (name,address,phone,membership_type,city,state,gender,email,password) VALUES ('$name','$address','$phone','Regular','$city','$state','$gender','$email','$pass')";
$result = pg_query($query); 

	}else{
    echo "Not connected";
  }

?>