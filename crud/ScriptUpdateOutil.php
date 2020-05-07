<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Updated Tool</h1>
</div>

<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$role = $_POST['role'];



$tabloOutil = array(
  "id_outil" => $id,
  "nom_outil" => $nom,
  'role_outil' => $role);

$monOutil = new Outil($tabloOutil);

$monOutilRepo = new OutilRepository($db);

$monOutilRepo -> update($monOutil);

  echo " <article>
              <h3>" . $tabloOutil['nom_outil'] . "</h3>
              <p> Role : ". $tabloOutil['role_outil'] . "</p>
      </article>";

?>
