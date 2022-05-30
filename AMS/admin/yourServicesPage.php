


        


<?php 

session_start();

$cust_id = (int) $_SESSION['cust_id'];


$vehicle_number=array();
$vehicle_name=array();
$comments=array();
$vehicle_type=array();
$status=array();
$date=array();
$service_type=array();
$added_on=array();


$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.service where cust_id='$cust_id'";
$result = pg_query($query); 

  

while ($row=pg_fetch_object($result)){

    array_push($vehicle_number,$row->vehicle_no);
    array_push($vehicle_name,$row->vechicle_name);
    array_push($comments,$row->comments);
    array_push($vehicle_type,$row->vehicle_type);
    
    if($row->is_completed=='f'){
        array_push($status,"Pending");
    }else{
        array_push($status,"Completed");

    }
    array_push($date,$row->added_on);
    array_push($service_type,$row->service_type);



    
  }

//   echo implode(" ",$name);
    

	}else{
    echo "Not connected";
  }




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service history</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
    <div class="navbar">
      <a href="/AMS/ADMIN/customerHome.php">Home</a>
      
        <a href="/AMS/ADMIN/yourServicesPage.php" class="nav-links"  >Your Services</a>
        <a href="" >Profile</a>
        <a href="/AMS/ADMIN/clogout.php">Logout</a>


</div>

<div class="intro">
      <h1 class="info-head" style="color:#f2f2f2">Service History</h1>
    </div>

    <div class="table-cust">
      <table class="table-customer">
        <tr>
          <th>
            Vehicle number
          </th>
          <th>
            Vehicle name
          </th>
          <th>
            Comments
          </th>
          <th>
            Vehicle type
          </th>
          <th>
            Status
          </th>
          <th>
            Date
          </th>
          <th>
            Service type
          </th>
        </tr>


        <?php
                for ($x = 0; $x <count($vehicle_name); $x++) {
                    echo "<tr>
                        <td> 
                        $vehicle_number[$x]
                        </td>
                        <td> 
                        $vehicle_name[$x]
                        </td>
                        <td> 
                        $comments[$x]
                        </td>
                        <td> 
                        $vehicle_type[$x]
                        </td>
                        <td> 
                        $status[$x]
                        </td>
                        <td> 
                        $date[$x]
                        </td>
                        <td> 
                        $service_type[$x]
                        </td>
                    </tr>";
                 }


            ?>



      </table>
    </div>
</body>
</html>