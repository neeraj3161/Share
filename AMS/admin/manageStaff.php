


<?php 

$name=array();
$added_on=array();
$address=array();
$phone=array();
$userId=array();
$email=array();


$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.staff";
$result = pg_query($query); 

  

while ($row=pg_fetch_object($result)){
    array_push($name,$row->name);
    array_push($added_on,$row->added_on);
    array_push($address,$row->address);
    array_push($phone,$row->phone);
    array_push($userId,$row->staff_id);
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
    <title>Manage staff</title>

    <link rel="stylesheet" href="styles.css">
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


    <div class="staff-btn">
        <h1 class="info-head head-staff">Manage Staff</h1><br>
        <button type="button" class="btn-staff all"><a  class="a-staff" href="">View all staff</a></button><br>
        <img class="cross" src="failed.png" alt=""><br>

        <table class="table-staff">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Staff since
                </th>
                <th>
                   Email
                </th>
                <th>
                    Address
                </th>
                <th>
                    Phone Number
                </th>
                <th>
                    User Id
                </th>
            </tr>

            <?php
                for ($x = 0; $x <count($name); $x++) {
                    echo "<tr>
                        <td> 
                        $name[$x]
                        </td>
                        <td> 
                        $added_on[$x]
                        </td>
                        <td> 
                        $email[$x]
                        </td>
                        <td> 
                        $address[$x]
                        </td>
                        <td> 
                        $phone[$x]
                        </td>
                        <td> 
                        $userId[$x]
                        </td>
                    </tr>";
                 }


            ?>

            
        </table>



        
        <table class="Leave-request lr">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    User Id
                </th>
                <th>
                    Request Date
                </th>
                <th>
                    Requested on
                </th>
                <th>
                    Approve
                </th>
                <th>
                    Deny
                </th>
            </tr>
        </table>




        <table class="table-remove">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Age
                </th>
                <th>
                    Address
                </th>
                <th>
                    Phone Number
                </th>
                <th>
                    Working since
                </th>
                <th>
                    User Id
                </th>
                <th>
                    Access
                </th>
            </tr>

            
        </table>


        <form action="/AMS/ADMIN/remove.php" method="post">
        <input class="input user c" type="number" name="user_id" placeholder="Enter user Id">
        <button type="submit" class="btn-staff submit">Submit</button>
        </form>


        <br>
        <button class="btn-staff leave"><a class="a-staff" href="">Leave requests</a></button>
        <button class="btn-staff performance"><a class="a-staff" href="PerformanceReport.html">Performance report</a></button><br>
        <button class="btn-staff remove"><a class="a-staff" href="">Remove staff</a></button><br>
    </div>

    

    <script src="app.js"></script>
</body>
</html>