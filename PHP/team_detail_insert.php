<?php
session_start();

if(isset($_POST['btn_t'])){
    $id = $_POST['id'];
    $tname = $_POST['tname'];
    $cname = $_POST['tcaptian'];
    $total = $_POST['totalp'];
    $participate = $_POST['participate'];
    $extra = $_POST['extra'];

    include('./connection_db.php');
    $q = "INSERT INTO team_detail(user_id, team_name, team_captain, total_player, participate_player, extra_player) VALUES('$id','$tname','$cname','$total','$participate','$extra')";
    $data = mysqli_query($con, $q);
    
    if($data){
        // Redirect with session ID as parameter
      
        header('Location: "../player_registration.php?session_id=' . urlencode($id) . '"');
    }    
    else{
        echo "failed";
    }
}
?>