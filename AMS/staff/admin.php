<!-- getting form data from the login form -->
<?php 


session_start();

$is_logged_in=FALSE;

$username = $_POST["userIdAdmin"];
$password=$_POST["pswAdmin"];

$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.admin where user_id='$username' and password ='$password'";
$result = pg_query($query); 


// checking if the returned number of rows is 0 that means it didn't returned anything so the user or pass is incorrect
if(pg_num_rows($result) == 0)
{
    echo "User ID or Password incorrect!!!";
}


// so you can get the data here
while ($row=pg_fetch_object($result)){
    if($row->user_id!=$username){
        echo strlen($row->user_id);

    }else{
      echo "right";
        $_SESSION['adminName']=$row->name;
        header('location:/AMS/ADMIN/index.php');
    }
  }

	}else{
    echo "Not connected to the server";
  }


  // not if is_logged_in is true it will go futher

?>