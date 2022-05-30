<?php 
$staff_id = $_POST["staffId"];
$service=$_POST["serviceId"];



$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      echo "Updated successfully\n";

$query = "update ams.service set assigned_to='$staff_id' where service_id='$service'";
$result = pg_query($query); 

	}else{
    echo "Not connected";
  }

?>