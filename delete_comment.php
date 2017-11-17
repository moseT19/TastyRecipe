<?php 
    
    include("config.php");
    
    $commentid = $_GET['id'];
    echo $commentid;
    $sql = "DELETE FROM comments WHERE id='$commentid'";
    $res = mysqli_query($db, $sql);
    if($res){
        if($_GET['recipe'] == 'pancake')
          header("location: login.php#pancake-address");
        else if($_GET['recipe'] == 'meatball')
          header("location: login.php#meatball-address");
    }
?>