<?php 
    
    include("config.php");
    
    $commentid = $_GET['id'];
    echo $commentid;
    $sql = "DELETE FROM comments WHERE id='$commentid'";
    $res = mysqli_query($db, $sql);
    if($res){
        header("location: login.php#pancake-address");
    }
?>