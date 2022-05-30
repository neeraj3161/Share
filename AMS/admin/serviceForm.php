<?php 

session_start();


$vehicle_no = $_POST["vn"];
$vehicle_name=$_POST['vnn'];
$servicetype=$_POST['servicetype'];

$wheeler=$_POST['wheeler'];

$comments=$_POST['comments'];

$cust_id = (int) $_SESSION['cust_id'];


$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "INSERT INTO ams.service (service_type,vehicle_no,vechicle_name,comments,vehicle_type,assigned_to,cust_id) VALUES ('$servicetype','$vehicle_no','$vehicle_name','$comments','$wheeler',0,'$cust_id')";
$result = pg_query($query); 

        echo "Successfully added <a href='/AMS/ADMIN/customerHome.php'>Go back</a>";



	}else{
    echo "Not connected";
  }

?>