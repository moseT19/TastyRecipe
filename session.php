<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from Users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   echo"nu är vi inne i session";
   
    if(!isset($_SESSION['login_user'])){
       echo"session fungerar inte bre";
      
   }
?>