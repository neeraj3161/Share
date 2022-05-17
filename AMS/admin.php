

<?php 
$username = $_POST["userIdAdmin"];
$password=$_POST["pswAdmin"];



$con = pg_connect("host=localhost port=5432 dbname=ams user=postgres password=aaa@111");
	
	if($con){

$query = "SELECT * from ams.admin where user_id='$username' and password ='$password'";
$result = pg_query($query); 

if(pg_num_rows($result) == 0)
{
    echo "User ID or Password incorrect!!!";
}

  

while ($row=pg_fetch_object($result)){
    if($row->user_id!=$username){
        echo strlen($row->user_id);

    }else{
        // echo strlen($row->user_id);
        echo "Logged in successfully!!!";
    }
    // echo "\n".$row->password;
    // echo "\n".$row();
  }

    

	}else{
    echo "Not connected";
  }




?>