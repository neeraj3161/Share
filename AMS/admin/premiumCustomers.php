<?php 

session_start();



// $cust_id = (int) $_SESSION['cust_id'];


$name=array();
$address=array();
$phone=array();
$email=array();
$membership_type=array();
$added_on=array();
$city=array();
$state=array();
$gender=array();


$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.customer where membership_type='Premium'";
$result = pg_query($query); 

  

while ($row=pg_fetch_object($result)){

    array_push($name,$row->name);
    array_push($address,$row->address);
    array_push($phone,$row->phone);
    array_push($membership_type,$row->membership_type);
    array_push($added_on,$row->added_on);

    
    array_push($city,$row->city);
    array_push($state,$row->state);

    array_push($gender,$row->gender);


    array_push($email,$row->email);




    
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
    <title>Customers List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style=" background-image: url('blur-back.png');
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;">

    <div class="navbar">
        <div class="navbar">
          <a href="/AMS/ADMIN/index.php">Home</a>
          
            <a href="/AMS/ADMIN/customerSection.php" class="nav-links"  >Customer section</a>
            <a href="staffSection.html" ">Staff section</a>
            <a href="#news">Logout</a>


    </div>

    </div>

    
    <div class="intro">
      <h1 class="info-head">Customer's List</h1>
    </div>

    <div class="table-cust" >
      <table class="table-customer">
        <tr>
          <th>
            Name
          </th>
          <th>
            Address
          </th>
          <th>
            Phone number
          </th>
          <th>
          Email
            
          </th>
          <th>
          Membership type
           
          </th>
          <th>
          Member Since
            
          </th>
          <th>
          City
            
          </th>
          <th>
          State
          </th>
          <th>
            Gender
          </th>
        </tr>

        <?php
                for ($x = 0; $x <count($name); $x++) {

                
                    echo "<tr>
                        <td> 
                        $name[$x]
                        </td>
                        <td> 
                        $address[$x]
                        </td>
                        <td> 
                        $phone[$x]
                        </td>
                        <td> 
                        $email[$x]
                        </td>
                        <td> 
                        $membership_type[$x]
                        </td>
                        <td> 
                        $added_on[$x]
                        </td>
                        <td> 
                        $city[$x]
                        </td>
                        <td> 
                        $state[$x]
                        </td>
                        <td> 
                        $gender[$x]
                        
                    </tr>";
                 }


                //  </td>

                //         <td><button class='history-btn'>View</button></td>
            ?>






      </table>
    </div>
</body>
</html>