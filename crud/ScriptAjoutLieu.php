<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Place</h1>
</div>

<?php

$nom = $_POST['nom'];
$img = $_POST['img'];
$topo = $_POST['topo'];
$gps = $_POST['gps'];
$id = 4;

$tabloLieu = array(
  "id_lieu" => $id,    
  "nom_lieu" => $nom,
  "img_lieu" => $img,
  'topo_lieu' => $topo,
  'gps_lieu' => $gps);

$monLieu = new Lieu($tabloLieu);

$monLieuRepo = new LieuRepository($db);

$monLieuRepo -> add($monLieu);

  echo " <article>
              <h3>" . $tabloLieu['nom_lieu'] . "</h3>
              <img src=". $tabloLieu['img_lieu']." width='320' height='200' class='img-fluid' "."</img>
              <p> Topography : ". $tabloLieu['topo_lieu'] . "</p>
              <p> GPS Position : ". $tabloLieu['gps_lieu'] ."</p>
      </article>";

?>


<?php

require '../vue/footer.php';

?>