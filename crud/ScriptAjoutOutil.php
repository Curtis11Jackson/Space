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
$id = 4;

$tabloOutil = array(
  "id_outil" => $id,
  "nom_outil" => $nom,
  'role_outil' => $role,
);

$monOutil = new Outil($tablooutil);

$monOutilRepo = new OutilRepository($db);

$monOutilRepo -> add($monOutil);

  echo " <article>
              <h3>" . $tabloOutil['nom_outil'] . "</h3>
              <p> Role : ". $tabloOutil['role_lieu'] . "</p>
      </article>";


?>


<?php

require '../vue/footer.php';

?>