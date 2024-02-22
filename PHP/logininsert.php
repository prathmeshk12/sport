<?php
if(isset($_POST['btn_login'])){
    
     $uemail=addslashes($_POST['name']);
     $upass=addslashes($_POST['pass']);

     include("./connection_db.php");
     $sql="SELECT user_id FROM users WHERE user_email='$uemail' AND user_password='$upass'";
     $result=mysqli_query($con,$sql);
     $data=mysqli_num_rows($result);
  
if($result == 1)
 { 
    header("location:../ index1.php"); 
 }
else
 { 
    echo " <script>alert('Wrong Email Password Combination'); window.location='login.php'</script> ";
 }
}
?>