<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>The list of tools</h1>
<?php
$monOutRepo = new OutilRepository($db);

$countOutil = $monOutRepo->getCountById();

echo "<h3>Nunber of tools :" .$countOutil[0]. "</h3>";

$tableauOutil = $monOutRepo->getListName();

foreach ($tableauOutil as $Outil) {
    echo " <article>
              <h3>" . $Outil['nom_outil'] . "</h3>
              <p> Number id : ". $Outil['id_outil'] . "</p>
              <p> Rôle : ". $Outil['role_outil'] . "</p>
              <p style='width:15%;'><a href='DeleteOutil.php?id=".$Outil['id_outil']."' style='font-size:20px;'>Delete this Tool</a></p>
              <p style='width:15%;'><a href='UpdateOutil.php?id=".$Outil['id_outil']."&nom=".$Outil['nom_outil']."&role=".$Outil['role_outil']."' style='font-size:20px;'>Update this Tool</a></p>
              </article>";


}

?>

<?php

require '../vue/footer.php';

?>
