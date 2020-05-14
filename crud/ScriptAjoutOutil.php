<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Tool</h1>
</div>

<?php

$nom = $_POST['nom'];
$role = $_POST['role'];
$mineral = $_POST['mineral'];
$id = 4;

$tabloOutil = array(
  "id_outil" => $id,
  "nom_outil" => $nom,
  'role_outil' => $role,
  'fk_min' => $mineral
);

$monOutil = new Outil($tabloOutil);

$monOutilRepo = new OutilRepository($db);

$monOutilRepo -> add($monOutil);

  echo " <article>
              <h3>" . $tabloOutil['nom_outil'] . "</h3>
              <p> Role : ". $tabloOutil['role_outil'] . "</p>
              <p> Mineral looked for : ". $tabloOutil['fk_min'] . "</p>
      </article>";


?>


<?php

require '../vue/footer.php';

?>