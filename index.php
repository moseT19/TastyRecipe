<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
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
            <?php
                
                if(isset($_GET['login']) && $_GET['login'] == 'failed'){
                    echo '<p>Wrong username or password. <p>';
                }
            ?>
        <button id="loginbutton" onclick="document.getElementById('id01').style.display='block'" style="/*width:auto;*/">Login</button>
        <button id="regbutton" onclick="document.getElementById('id02').style.display='block'" style="/*width:auto;*/">Register</button>
        
	</header>
        
        <div id="id01" class="modal">
  
      <form class="modal-content animate" action="loginuser.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="/images/user_logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          
          <input type="text" placeholder="Enter Username" name="username" pattern="[a-zA-Z0-9]" required>

          
          <input type="password" placeholder="Enter Password" name="password" pattern="[a-zA-Z0-9]" required>

          <button id="overlayloginbutton" type="submit">Login</button>
          
        </div>

        
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
      </form>
    </div>
        
    <div id="id02" class="modal">
  
      <form class="modal-content animate" action="register.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="/images/user_logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          
          <input type="text" placeholder="Enter Username" name="username" pattern="[a-zA-Z0-9]" required>

          
          <input type="password" placeholder="Enter Password" name="password" pattern="[a-zA-Z0-9]" required>

          <button id="overlayloginbutton" type="submit">Register</button>
          
        </div>

        
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
      </form>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        var modal2 = document.getElementById('id02');
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>  
        
        
        
	<div class="container">

            <div class="block" id="welcome-block">
                    <h1>Welcome to Tasty Recipes!</h1>
                    <p>Thank you so much for stopping by the site! If you are new to Simply Recipes, the one thing you should know about us is that we are obsessed with creating scratch cooking recipes that you will love. <br/><br/> Click on the <a href="#calendar-address">calendar</a> to get a monthly overview and an example of when to cook certain recipes. </p>
                <img src="images/recipe-collection.png" alt="Recipe collection logo image. ">
            </div>
        <div class="space" id="calendar-address"></div>
            <div class="block">
                <h1>Calendar</h1>


                <?php

                    echo '<h1>'. date('F').'</h1>';
                    $tempdate = '2017-11-06';
                    for($q = 0; $q < 7; $q++){
                        echo '<li class="calendar-item">'. date('D', strtotime($tempdate)) .'</li>';
                        $tempdate = date('Y-m-d', strtotime("$tempdate +1 day"));
                    }
                    $inputMonth = date('y-m-j');
                    $month = date("m" , strtotime($inputMonth));
                    $year = date("Y" , strtotime($inputMonth));
                    $getdate = getdate(mktime(null, null, null, $month, 1, $year));
                    $day = $getdate["wday"];

                    $temp = 0;
                    if ($day == 0)
                    {
                      $day = 7;
                    };
                    for ($k = 1; $k < $day; $k++)
                    {
                      echo '<li class="calendar-item" ></li>';
                      $temp++;
                    };
                    for ($i = 1; $i <= date('t'); $i++)
                    {
                      if ($i == 10)
                      {
                        echo '<li class="recipeday">' . $i . '<a href="#pancake-address"><img src="images/kottbullar.png" alt="An image to show what recipe is to be made which day of the month. This was an image of meatballs. " ></a></li>';
                      }
                      elseif ($i == 19)
                      {
                        echo '<li class="recipeday">' . $i . '<a href="#meatball-address"><img src="images/pancake.jpg" alt="An image to show what recipe is to be made which day of the month. This was an image of pancake. " ></a></li>';
                      }
                      elseif ($i == date('d'))
                      {
                        echo '<li  class="calendar-item" id="current_date">' . $i . '</li>';
                      }
                      else
                      {

                        echo '<li class="calendar-item" >' . $i . '</li>';
                      };
                      if ((($i + $temp) % 7) == 0)
                      {
                        echo '<br class="clear" />';
                      };
                    };
                  ?>
            </div>
        <div class="space" id="meatball-address"></div>
                <div class="block">

                <h1>Meatball Recipe</h1>
            <img class="recipe-image" src="images/kottbullar.png" alt="An image to illustrate the final product the this recipe of meatballs. ">
            <div class="left-column">
                <h3>Method</h3>
                <p>
                1. Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.
               <br/><br/> 2.
                In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.
                <br/><br/>3.
                Bake uncovered 18 to 22 minutes or until no longer pink in center.</p>
            </div>
            <div class="right-column">

             <h3>Ingredients: </h3>
             <ul>
                 <li>1 lb lean (at least 80%) ground beef</li>
                 <li>1/2 cup Progresso™ Italian-style bread crumbs</li>
                    <li>1/2 teaspoon baking powder</li>
                    <li>1/4 cup milk</li>
                    <li>1/2 teaspoon salt</li>
                    <li>1/2teaspoon Worcestershire sauce</li>
                    <li>1/4 teaspoon pepper</li>
                    <li>1 small onion, finely chopped (1/4 cup)</li>
                    <li>1egg</li>

             </ul>
             </div>
            <div class="comments">
                <h3>Comments</h3>
                <?php
                 include("config.php");
                      $sql = "SELECT * FROM comments WHERE recipe = 'meatball'";
                      $result = mysqli_query($db,$sql);

                      if($result) {
                          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                              echo '<div class="comment" >
                                    <h4>'.$row['username'].'</h4>
                                    <p>'.$row['comment'].'</p>
                                </div>';
                          }
                      }
                   
                 ?>
            </div>

        </div>
        <div class="space" id="pancake-address"></div>
         <div class="block">
            <h1>Pancake Recipe</h1>
            <img class="recipe-image" src="images/pancake.jpg" alt="An image to illustrate the final product the this recipe of pancakes. ">
            <div class="left-column">
                <h3>Method</h3>
                <p>Whisk together the dry ingredients in a large bowl. <br>In a separate bowl, whisk the eggs, then whisk in the milk, and buttermilk. Pour the wet ingredients into the dry ingredients and combine, using a wooden spoon. Mix only until the batter just comes together. Stir in the melted butter. Do not over-mix! The mixture should be a little lumpy. Lumpy is good. A lumpy batter makes fluffy pancakes.<br><br/>
At this point you can either gently fold in the blueberries, or wait until you pour the batter onto the griddle, and then place the blueberries into the surface of the pancake batter. Placing the blueberries into the pancakes while they are cooking will help keep them from bleeding.</p>
            </div>
            <div class="right-column">

             <h3>Dry ingredients: </h3>
             <ul>
                 <li>2 cups all purpose flour</li>
                 <li>1/2 teaspoon salt</li>
                 <li>
1/2 teaspoon baking powder</li>
                 <li>1/2 teaspoon baking soda</li>
                 <li>2 Tbsp sugar</li>
             </ul>
             <h3>Other ingredients: </h3>
             <ul>
                 <li>2 large eggs</li>
                 <li>1/2 cup buttermilk</li>
                 <li>1 cup milk</li>
                 <li>3 Tbsp warm melted butter</li>
                 <li>1 cup blueberries</li>
                 <li>Butter or vegetable oil</li>
             </ul>
             </div>
             <div class="comments">
                <h3>Comments</h3>
                <?php
                 
                      $sql = "SELECT * FROM comments WHERE recipe = 'pancake'";
                      $result = mysqli_query($db,$sql);

                      if($result) {
                          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                              echo '<div class="comment" >
                                    <h4>'.$row['username'].'</h4>
                                    <p>'.$row['comment'].'</p>
                                </div>';
                          }
                      }
                   
                 ?>
            </div>
            </div>
	</div>

	</body>
</html>

