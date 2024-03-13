<?php
 session_start();

   if(isset($_POST['btn_ps'])){
  $id= $_POST['tid'];
   
   $img=$_FILES['image']['name'];
   $name=$_POST['name'];
   $pdesign=$_POST['p_design'];
   $ptype=$_POST['ptype'];
   $team=$_POST['team'];
    $contact=$_POST['contact'];
  
   include('./connection_db.php');
  
        

   $q="INSERT INTO player_detail(user_id, player_name, p_designation, p_type, team_name, contact, p_image)VALUES('$id','$name','$pdesign','$ptype','$team','$contact','$img') ";
   $data=mysqli_query($con,$q);
     if($data){
      //move_uploaded_file($_FILES['image']['tmp_name'],"../images1/player_images/$img");
         //echo '<script type="text/javascript">'; 
 //echo 'alert("Registration Successfully");'; 
 header('Location:  ../player_registration.php?session_id=' . urlencode($id));
 
     }
   else{
     echo"faild";
   }
    }
 




?>