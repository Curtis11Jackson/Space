<?php 
include 'identifier.php';
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

    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" media="(max-width: 992px)" href="css/tablet.css"/>
		<link rel="stylesheet" media="(max-width: 576px)" href="css/smartphone.css"/> -->



		<title>Space Missions</title>

  </head>

  <body>
	<header>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:black;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color:white;"></span>
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
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animaux</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajouteranimal.php'>";
            }
            else
            {
            echo "href='crud/ajouteranimal.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updateanimal.php'>";
            }
            else
            {
            echo "href='crud/updateanimal.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deleteanimal.php'>";
            }
            else
            {
            echo "href='crud/deleteanimal.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlisteanimal.php'>";
            }
            else
            {
            echo "href='crud/afficherlisteanimal.php'>";
            }
        ?> 
        >Voir la liste des animaux</a>

</div>
</li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aliens</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajouteralien.php'>";
            }
            else
            {
            echo "href='crud/ajouteralien.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updatealien.php'>";
            }
            else
            {
            echo "href='crud/updatealien.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deletealien.php'>";
            }
            else
            {
            echo "href='crud/deletealien.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlistealien.php'>";
            }
            else
            {
            echo "href='crud/afficherlistealien.php'>";
            }
        ?> 
        >Voir la liste des aliens</a>
      </div>
</li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minéraux</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajoutermineral.php'>";
            }
            else
            {
            echo "href='crud/ajoutermineral.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updatemineraux.php'>";
            }
            else
            {
            echo "href='crud/updatemineraux.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deletemineraux.php'>";
            }
            else
            {
            echo "href='crud/deletemineraux.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlistemineral.php'>";
            }
            else
            {
            echo "href='crud/afficherlistemineral.php'>";
            }
        ?> 
        >Voir la liste des minéraux</a>
      </div>
</li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lieux</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajouterlieu.php'>";
            }
            else
            {
            echo "href='crud/ajouterlieu.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updatelieu.php'>";
            }
            else
            {
            echo "href='crud/updatelieu.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deletelieu.php'>";
            }
            else
            {
            echo "href='crud/deletelieu.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlistelieu.php'>";
            }
            else
            {
            echo "href='crud/afficherlistelieu.php'>";
            }
        ?> 
        >Voir la liste des lieux</a>
      </div>
</li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Végétaux</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajoutervegetal.php'>";
            }
            else
            {
            echo "href='crud/ajoutervegetal.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updatevegetal.php'>";
            }
            else
            {
            echo "href='crud/updatevegetal.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deletevegetal.php'>";
            }
            else
            {
            echo "href='crud/deletevegetal.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlistevegetal.php'>";
            }
            else
            {
            echo "href='crud/afficherlistevegetal.php'>";
            }
        ?> 
        >Voir la liste des végétaux</a>

      </div>
</li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Outils</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='ajouteroutil.php'>";
            }
            else
            {
            echo "href='crud/ajouteroutil.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='updateoutil.php'>";
            }
            else
            {
            echo "href='crud/updateoutil.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='deleteoutil.php'>";
            }
            else
            {
            echo "href='crud/deleteoutil.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='afficherlisteoutil.php'>";
            }
            else
            {
            echo "href='crud/afficherlisteoutil.php'>";
            }
        ?> 
        >Voir la liste des outils</a>
      </div>
</li>
    </ul>
  </div>
</nav>

</header>
