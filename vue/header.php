
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
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animaux</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AjouterAnimal.php'>";
            }
            else
            {
            echo "href='crud/AjouterAnimal.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherLieuAnimal.php'>";
            }
            else
            {
            echo "href='crud/AfficherLieuAnimal.php'>";
            }
        ?> 
        >Afficher le Lieu/Animal</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='MangerAnimalVegetal.php'>";
            }
            else
            {
            echo "href='crud/MangerAnimalVegetal.php'>";
            }
        ?> 
        >Les animaux mangent les vegetaux</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeAnimal.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeAnimal.php'>";
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
              echo "href='AjouterAlien.php'>";
            }
            else
            {
            echo "href='crud/AjouterAlien.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='UpdateAlien.php'>";
            }
            else
            {
            echo "href='crud/UpdateAlien.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='DeleteAlien.php'>";
            }
            else
            {
            echo "href='crud/DeleteAlien.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeAlien.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeAlien.php'>";
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
              echo "href='AjouterMineral.php'>";
            }
            else
            {
            echo "href='crud/AjouterMineral.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherLieuMineral.php'>";
            }
            else
            {
            echo "href='crud/AfficherLieuMineral.php'>";
            }
        ?> 
        >Afficher le Lieu/Mineral</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherMineralOutil.php'>";
            }
            else
            {
            echo "href='crud/AfficherMineralOutil.php'>";
            }
        ?> 
        >Afficher le Mineral/Outil</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeMineral.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeMineral.php'>";
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
              echo "href='AjouterLieu.php'>";
            }
            else
            {
            echo "href='crud/AjouterLieu.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='UpdateLieu.php'>";
            }
            else
            {
            echo "href='crud/UpdateLieu.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='DeleteLieu.php'>";
            }
            else
            {
            echo "href='crud/DeleteLieu.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeLieu.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeLieu.php'>";
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
              echo "href='AjouterVegetal.php'>";
            }
            else
            {
            echo "href='crud/AjouterVegetal.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='UpdateVegetal.php'>";
            }
            else
            {
            echo "href='crud/UpdateVegetal.php'>";
            }
        ?> 
        >Modifier</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='DeleteVegetal.php'>";
            }
            else
            {
            echo "href='crud/DeleteVegetal.php'>";
            }
        ?> 
        >Supprimer</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeVegetal.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeVegetal.php'>";
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
              echo "href='AjouterOutil.php'>";
            }
            else
            {
            echo "href='crud/AjouterOutil.php'>";
            }
        ?> 
        >Ajouter</a>

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeOutilVegetal.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeOutilVegetal.php'>";
            }
        ?> 
        >Liste Outil/Vegetal</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeOutilAnimal.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeOutilAnimal.php'>";
            }
        ?> 
        >Afficher Liste Outil/Animal</a>
        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='AfficherListeOutil.php'>";
            }
            else
            {
            echo "href='crud/AfficherListeOutil.php'>";
            }
        ?> 
        >Voir la liste des outils</a>
      </div>
</li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:white;"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu" style="background-color:black;" aria-labelledby="navbarDropdownMenuLink">

        <a class="dropdown-item bg-primary" style="color:white;"  style="background-color:black;" 
        <?php 
            if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
              echo "href='Login.php'>";
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
