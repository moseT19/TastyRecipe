
    <?php
        include("config.php");
        
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
        $newusername = mysqli_real_escape_string($db,$_POST['username']);
        $newpassword = mysqli_real_escape_string($db,$_POST['password']); 
        $usernametaken = "SELECT username FROM Users WHERE username ='$newusername'";
        $takenresult = mysqli_query($db, $usernametaken);
        if(mysqli_num_rows($takenresult) == 1){
            header("location: index.php?username=taken");
        }
        else{
        $sql = "INSERT INTO Users(username, password) VALUES('$newusername','$newpassword')";
        $result = mysqli_query($db,$sql);
        echo '<h1>habib</h1>';
        if($result) {

         header("location: index.php?username=valid");
        }else {
         $error = "Your Username or Password is invalid";
        }
        }
   }
    ?>
	