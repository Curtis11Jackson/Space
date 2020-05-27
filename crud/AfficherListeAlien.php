<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>List of Aliens</h1>

<?php
$monAlienRepo = new AlienRepository($db);

$countAlien = $monAlienRepo->getCountById();

echo "<h3> Number of aliens : " .$countAlien[0]. "</h3>";
?>
<section style="display:flex; flex-wrap: wrap;">
<?php
$tableauAlien = $monAlienRepo->getListName();

foreach ($tableauAlien as $Alienz) {
    echo " <article style='border:1px solid white; width:50%;'>
                <h3>" . $Alienz['nom_alien'] . "</h3>
                <p style='width:35%; margin:auto; margin-bottom:1%;'> Numéro id : ". $Alienz['id_alien'] . "</p>
                <p style='width:35%; margin:auto; margin-bottom:1%;'> Race : ". $Alienz['race_alien'] . "</p>
                <p style='width:35%; margin:auto; margin-bottom:1%;'> Caractère : ". $Alienz['carac_alien'] ."</p>
                <p style='width:25%;'><a href='DeleteAlien.php?id=".$Alienz['id_alien']."' style='font-size:20px;'>Delete this Alien</a></p>
                <p style='width:25%;'><a href='UpdateAlien.php?id=".$Alienz['id_alien']."&nom=".$Alienz['nom_alien']."&race=".$Alienz['race_alien']." &carac=".$Alienz['carac_alien']."' style='font-size:20px;'>Update this Alien</a></p>
        </article>";
}
?>
</section>
<?php
 
require '../vue/footer.php';

?>


