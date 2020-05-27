<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>The list of tools</h1>
<?php
$monOutRepo = new OutilRepository($db);

$countOutil = $monOutRepo->getCountById();

echo "<h3>Number of tools : " .$countOutil[0]. "</h3>";

?>
<section style="display:flex; flex-wrap: wrap;">
<?php

$tableauOutil = $monOutRepo->getListName();

foreach ($tableauOutil as $Outil) {
    echo " <article style='border:1px solid white; width:50%;  margin-bottom:2%;'>
              <h3>" . $Outil['nom_outil'] . "</h3>
              <p style='width:35%; margin:auto; margin-bottom:2%;'> Number id : ". $Outil['id_outil'] . "</p>
              <p style='width:35%; margin:auto; margin-bottom:2%;'> Rôle : ". $Outil['role_outil'] . "</p>
              <p style='width:25%;'><a href='DeleteOutil.php?id=".$Outil['id_outil']."' style='font-size:20px;'>Delete this Tool</a></p>
              <p style='width:25%;'><a href='UpdateOutil.php?id=".$Outil['id_outil']."&nom=".$Outil['nom_outil']."&role=".$Outil['role_outil']."' style='font-size:20px;'>Update this Tool</a></p>
              </article>";


}

?>

<?php

require '../vue/footer.php';

?>
