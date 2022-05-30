

<?php 

session_start();
$username = $_POST["uname"];
$password=$_POST["psw"];

$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.customer where email='$username' and password ='$password'";
$result = pg_query($query); 

if(pg_num_rows($result) == 0)
{
    echo "Email or Password incorrect!!!";
}

  

while ($row=pg_fetch_object($result)){
  $_SESSION['username']=$row->name;
  $_SESSION['cust_id']=$row->cust_id;
    if($row->email!=$username ||$row->password!=$password ){
        // echo strlen($row->user_id);

    }else{
     
        // echo strlen($row->user_id);
        ?>
        <script>
          location.replace('/AMS/ADMIN/customerHome.php');
          </script>
        <?php
    }
    // echo "\n".$row->password;
    // echo "\n".$row();
  }

    

	}else{
    echo "Not connected";
  }




?>