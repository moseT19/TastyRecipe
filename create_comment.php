<?php
        include("config.php");
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
                      
                  $comment = mysqli_real_escape_string($db,$_POST['comment']);
                  $username = $_SESSION['login_user'];
                if($_GET['recipe'] == 'pancake'){
                    $sql = "INSERT INTO comments(username, comment, recipe) VALUES ('$username','$comment','pancake')";
                }
                else if($_GET['recipe'] == 'meatball'){
                    $sql = "INSERT INTO comments(username, comment, recipe) VALUES ('$username','$comment','meatball')";
                }
                  
                  $result = mysqli_query($db,$sql);
                  echo $username;
                  if($result) {
                      if($_GET['recipe'] == 'pancake')
                          header("location: login.php#pancake-address");
                      else if($_GET['recipe'] == 'meatball')
                          header("location: login.php#meatball-address");
                    }
                    else{
                        echo "something gick fel bruv.";
                    }
        }
?>