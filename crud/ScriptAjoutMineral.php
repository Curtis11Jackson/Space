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
$lieu = $_POST['lieu'];
$id = 4;

$tabloMineral = array(
  'id_min' => $id,
  'nom_min' => $nom,
  'class_min' => $class,
  'fk_lieu' => $lieu,
);


$monMineral = new Mineral($tabloMineral);


$monMineralRepo = new MineralRepository($db);

$monMineralRepo->add($monMineral);


  echo " <article>
            <h3>" . $tabloMineral['nom_min'] . "</h3>
            <p> Classification : ". $tabloMineral['class_min'] . "</p>
            <p> Lieu : ". $tabloMineral['fk_lieu'] ."</p>
  </article>";

?>

<?php
require '../vue/footer.php';

?>