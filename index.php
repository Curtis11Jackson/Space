<?php
require 'identifier.php';
require 'chargeauto.php';
?>



<!doctype html>

<html lang="Fr-fr">
  <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <?php 
    if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
      
      echo  "<link rel='stylesheet' type='text/css' href='../css/main.css'/>
      <link rel='stylesheet' media='(max-width: 992px)' href='../css/tablet.css'/>
      <link rel='stylesheet' media='(max-width: 576px)' href='../css/smartphone.css'/>";
    }
    else
    {
	  echo  "<link rel='stylesheet' type='text/css' href='css/main.css'/>
		<link rel='stylesheet' media='(max-width: 992px)' href='css/tablet.css'/>
		<link rel='stylesheet' media='(max-width: 576px)' href='css/smartphone.css'/>";
    }
?> 

		<title>Space Missions</title>

  </head>

  <body>
	<header>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="background-color:white;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">

        <a class="nav-link" 
        
        <?php 
    if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
      echo "href='../index.php' style='color:white;'><img src='../images/nasa.png'";
    }
    else
    {
	  echo "href='index.php' style='color:white;'><img src='images/nasa.png'";
    }
?> 
        class="nasa" title="Home"></a>

      </li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='../index.php'>";
            }
            else
            {
            echo "href='index.php'>";
            }
        ?> 
        >Log In</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='CreateUser.php'>";
            }
            else
            {
            echo "href='crud/CreateUser.php'>";
            }
        ?> 
        >Sign Up</a>
      </div>
</li>
    </ul>
  </div>
</nav>

</header>



<div class="banner">
  <h1 style="margin-bottom:4vh">Space Exploration</h1>
</div>

<article style="width:60%; margin:auto; border:2px white solid; text-align:center;">
  <video src="videos/Launch.mp4" style="width:540px; height:360px; margin-bottom: 10px;  " controls autoplay>
</article>



<h2 style="color:white; margin-top:4vh; text-align:center;">Log In</h2>

<form class="w-50" method="POST" action="crud/CheckAccount.php" style="margin:auto;">
  <div class="form-group">
    <label for="login" style="color:white;">Login</label>
    <input type="text" id="login" name="login" class="form-control" placeholder="Renseignez votre Login" required>
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Mot de Passe</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Renseignez votre Mot de Passe" required>
  </div>
  <div style="width:15%; margin:auto;">
    <button type="submit" class="btn btn-success" style="margin:auto;">Accept</button>
  </div>
  <a href="crud/CreateUser.php" style="font-size:16px; margin-top:2%;" class="btn btn-primary">
    Create an account
  </a>
</form>

<?php

require 'vue/footer.php';

?>