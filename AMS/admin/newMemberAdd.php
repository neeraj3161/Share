<?php 
$name = $_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$zip=$_POST["zip"];

$gender=$_POST["gender"];

$city=$_POST["city"];

$state=$_POST["state"];

$pass=$_POST["pass"];

$strno = strval($phone);


$newDate = date("Y-m-d", strtotime($dob));




$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      echo "Registration successfull\n";

$query = "INSERT INTO ams.staff (name,email,password,gender,address,city,zip,dob,state,phone) VALUES ('$name','$email','$pass','$gender','$address','$city','$zip','$newDate','$state',$phone)";
$result = pg_query($query); 

	}else{
    echo "Not connected";
  }

?>