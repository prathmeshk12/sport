<?php
 session_start();
  $id=$_SESSION['id'];
   if(isset($_POST['btn_ps'])){
 
   $img=$_FILES['image']['name'];
   $name=$_POST['name'];
   $pdesign=$_POST['p_design'];
   $ptype=$_POST['ptype'];
   $team=$_POST['team'];
    $contact=$_POST['contact'];
  
   include('./connection_db.php');
   $con = new mysqli(
    "apache.mysql.database.azure.com",
    $_ENV['AZURE_MYSQL_USERNAME'],
    $_ENV['AZURE_MYSQL_PASSWORD'],
    "sportclub"
);
   $q="INSERT INTO player_detail(user_id, player_name, p_designation, p_type, team_name, contact, p_image)VALUES('$id','$name','$pdesign','$ptype','$team','$contact','$img') ";
   echo "<script>alert('Submitted Sucessfully');window.location='../index1.php'</script>";
      exit;
   $data=mysqli_query($con,$q);
    if($data){
     move_uploaded_file($_FILES['image']['tmp_name'],"../images1/player_images/$img");

header('Location:../player_registration.php');
exit;
    }
  else{
    echo "<script>alert('Submitted Sucessfully');window.location='../index1.php'</script>";    //echo"faild";
  }
   }





?>