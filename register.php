<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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

         header("location: index.php");
        }else {
         $error = "Your Username or Password is invalid";
        }
        }
   }
    ?>
	<head>
	<title>Tasty Recipes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">


	</head>
	<body>



	<header id="header">
        <div id="logo"><a href="index.php"><img src="images/recipe-collection.png" alt="Recipe collection logo image. "></a></div>
        <div class="header-inner"><a href="index.php"><h1 id="headline">Tasty Recipes</h1></a>

				<nav >
                        <ul>
                            <li><a href="#calendar-address">Calendar</a></li>
                            <li><a href="#meatball-address">Meatball</a></li>
                            <li><a href="#pancake-address">Pancakes</a></li>
                        </ul>
				</nav>
			</div>
        

	</header>
	<div class="container">
        <div class="block">
        <hi>Register here by entering a username and password. </hi>
        <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Register "/><br />
               </form>
            </div>
	</div>

	</body>
</html>

