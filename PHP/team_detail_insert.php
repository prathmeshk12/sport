<?php
 session_start();
  $id=$_SESSION['id'];
   if(isset($_POST['btn_t'])){

   $tname=$_POST['tname'];
   $cname=$_POST['tcaptian'];
   $total=$_POST['totalp'];
   $participate=$_POST['participate'];
   $extra=$_POST['extra'];
   
  
  // include('./connection_db.php');
  $con = new mysqli(
		"apache.mysql.database.azure.com",
		$_ENV['AZURE_MYSQL_USERNAME'],
		$_ENV['AZURE_MYSQL_PASSWORD'],
		"sportclub"
	);
$q = "INSERT INTO team_detail (user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES ('$id','$tname','$cname','$total','$participate','$extra')";
  $data=mysqli_query($con,$q);
    if($data){
     
       
#echo 'alert("Registration Successfully");'; 
header("Location: ../player_registration.php");
        exit;
    }
  else{
    echo"faild";
  }
   }





?>