<?php 
$userId = $_POST["user_id"];





$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){
      echo "Removed successfully\n";

$query = "delete from ams.staff where staff_id= $userId ";
$result = pg_query($query); 

	}else{
    echo "Not connected";
  }
