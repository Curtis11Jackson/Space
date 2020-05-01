<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Updated Alien</h1>
</div>

<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$race = $_POST['race'];
$carac = $_POST['carac'];


$tabloAli = array(
  "id_alien" => $id,
  "nom_alien" => $nom,
  'race_alien' => $race,
  'carac_alien' => $carac);

$monAlien = new Alien($tabloAli);

$monAlienRepo = new AlienRepository($db);

$monAlienRepo -> update($monAlien);

  echo " <article>
              <h3>" . $tabloAli['nom_alien'] . "</h3>
              <p> Race : ". $tabloAli['race_alien'] . "</p>
              <p> Caractère : ". $tabloAli['carac_alien'] ."</p>
      </article>";

?>


