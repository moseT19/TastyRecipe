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
    <link rel="stylesheet" href="<?= asset_url() ?>/css/reset.css">
    <link rel="stylesheet" href="<?= asset_url() ?>/css/style.css">


	</head>
	<body>
        <?php $this->session->set_userdata('last_page', current_url()); ?>
        <header id="header">
        <div id="logo"><a href="index.php"><img src="<?= asset_url() ?>/images/recipe-collection.png" alt="Recipe collection logo image. "></a></div>
        <div class="header-inner"><a href="<?php echo base_url(); ?>"><h1 id="headline">Tasty Recipes</h1></a>

				<nav >
                        <ul>
                            <li><a href="<?php echo base_url(); ?>calendar">Calendar</a></li>
                            <li><a href="<?php echo base_url(); ?>meatball">Meatball</a></li>
                            <li><a href="<?php echo base_url(); ?>pancake">Pancakes</a></li>

                        </ul>
				</nav>
			</div>
            <?php if(!$this->session->userdata('logged_in')) : ?>
        <button id="loginbutton" onclick="document.getElementById('id01').style.display='block'" style="/*width:auto;*/">Login</button>
        <button id="regbutton"  style="/*width:auto;*/"><a href="<?php echo base_url(); ?>users/register" >Register</a></button>
            <?php endif; ?>
            <?php if($this->session->userdata('logged_in')) : ?>
            <button id="loginbutton"  style="/*width:auto;*/"><a href="<?php echo base_url(); ?>users/logout">Log out</a></button>
            <?php endif; ?>

            <!-- flashmessages -->
            <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert-fail">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('comment_posted')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_posted').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('comment_deleted')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_deleted').'</p>'; ?>
            <?php endif; ?>

	</header>

        <div id="id01" class="modal">

      <form class="modal-content animate" action="<?php echo base_url(); ?>users/login" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="/images/user_logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">

          <input type="text" placeholder="Enter Username" name="username" pattern="[a-zA-Z0-9]+" required>


          <input type="password" placeholder="Enter Password" name="password" pattern="[a-zA-Z0-9]+" required>

          <button id="overlayloginbutton" type="submit">Login</button>

        </div>


          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
