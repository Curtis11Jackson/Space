<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>Voici la liste des Outils</h1>
<?php
$monOutRepo = new OutilRepository($db);


$tableauOutil = $monOutRepo->getListName();

foreach ($tableauOutil as $Outil) {
    echo " <article>
              <h3>" . $Outil['nom_outil'] . "</h3>
                <p> Role : ". $Outil['role_outil'] . "</p>
              <p> Number id : ". $Outil['id_outil'] . "</p>
              <p style='width:15%;'><a href='DeleteOutil.php?id=".$Outil['id_outil']."' style='font-size:20px;'>Delete this Place</a></p>
              <p style='width:15%;'><a href='UpdateOutil.php?id=".$Outil['id_outil']."
              &nom=".$Outil['nom_outil']."&role=".$Outil['role_outil']."
                <p style='width:15%;'><a href='UpdateLieu.php?id=".$Outil['id_outil']."' style='font-size:20px;'>Update this Place</a></p>
              </article>";


}

?>

<?php

require '../vue/footer.php';

?>
