<?php
require '../identifier.php';
require '../chargeauto.php';
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
              echo "href='../Login.php'>";
            }
            else
            {
            echo "href='Login.php'>";
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

<section style="display:flex; flex-wrap: wrap;">

<article style='border:1px solid white; width:55%;  margin-bottom:2%;'>
  <h2 style="color:white; padding-bottom:5px; margin-top:4vh; text-align:center; background-color:black; width:20%; margin:auto; border-radius: 25px;">
  Create an account
  </h2>

    <form class="w-25" method="POST" action="AddedUser.php" style="margin:auto; margin-top:2%;">
      <div class="form-group">
      <label for="prenom"style="background:black;color:white; padding:5px; border-radius: 25px;">Prénom</label>
      <input  type="text" id="prenom" name="prenom" class="form-control" placeholder="Renseignez votre Prénom" required>
    </div>
    <div class="form-group">
      <label for="nom"style="background:black;color:white; padding:5px; border-radius: 25px;">Nom</label>
      <input type="text" id="nom" name="nom" class="form-control" placeholder="Renseignez votre Nom" required>
    </div>
    <div class="form-group">
      <label for="mail" style="background:black;color:white; padding:5px; border-radius: 25px;">Email</label>
      <input type="text" id="mail" name="mail" class="form-control" placeholder="Renseignez votre Email" required>
    </div>
    <div class="form-group">
      <label for="login"style="background:black;color:white; padding:5px; border-radius: 25px;">Login</label>
      <input type="text" id="login" name="login" class="form-control" placeholder="Renseignez votre Login" required>
    </div>
    <div class="form-group">
      <label for="password"style="background:black;color:white; padding:5px; border-radius: 25px;">Mot de Passe</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Renseignez votre Mot de Passe" required>
    </div>
    <div style="width:40%; margin:auto;">
    <button type="submit" class="btn btn-primary" style="margin:auto;">Créer mon compte</button>
    </div>
    </form>
</article>
<article style='border:1px solid white; width:45%;  margin-bottom:auto; margin-top: auto;'>
  <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1200">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block mx-auto img-fluid" src="../images/probe1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block mx-auto img-fluid" src="../images/probe2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block mx-auto img-fluid" src="../images/probe3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</article>
          </section>

<?php

require '../vue/footer.php';

?>
