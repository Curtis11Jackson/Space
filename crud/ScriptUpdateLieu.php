<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Updated Place</h1>
</div>

<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$topo = $_POST['topo'];
$gps = $_POST['gps'];


$tabloLieu = array(
  "id_lieu" => $id,
  "nom_lieu" => $nom,
  'topo_lieu' => $topo,
  'gps_lieu' => $gps);

$monLieu = new Lieu($tabloLieu);

$monLieuRepo = new LieuRepository($db);

$monLieuRepo -> update($monLieu);

  echo " <article>
              <h3>" . $tabloLieu['nom_lieu'] . "</h3>
              <p> Topography : ". $tabloLieu['topo_lieu'] . "</p>
              <p> GPS Coordinates : ". $tabloLieu['gps_lieu'] ."</p>
      </article>";

?>