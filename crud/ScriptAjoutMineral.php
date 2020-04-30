<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Mineral</h1>
</div>

<?php
$nom = $_POST['nom'];
$class = $_POST['class'];
$id = 4;

$tabloMineral = array(
  "id_min" => $id,
  "nom_min" => $nom,
  'class_min' => $class,
);

$monMineral = new Mineral($tabloMineral);

$monMineralRepo = new MineralRepository($db);

$monMineral -> add($monMineral);

  echo " <article>
            <h3>" . $tabloMineral['nom_min'] . "</h3>
            <p> Classification : ". $tabloMineral['class_min'] . "</p>
  </article>";

?>

<?php
require '../vue/footer.php';

?>