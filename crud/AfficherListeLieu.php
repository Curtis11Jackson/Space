<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>The list of Places</h1>


<?php

$monCommentRepo = new CommentRepository($db);

$countComment = $monCommentRepo->getCountById();

echo "<h3> Number of comments : " .$countComment[0]. "</h3>";

?>
<section style="display:flex; flex-wrap: wrap;">
<?php

$tabloComment = $monCommentRepo->GetLieuUser();
//echo var_dump($tabloComment);

foreach ($tabloComment as $Comment) {
        echo " <article style='border:1px solid white; width:50%;  margin-bottom:2%;'>
                    <h3>" . $Comment['nom_lieu'] . "</h3>
                    <img style='display:block; margin-left:auto; margin-right:auto;' src=../images/". $Comment['img_lieu']." width='320' height='200' ' "." </img>
                    <p style='width:35%; margin:auto; margin-top:2%;'> Topography : ". $Comment['topo_lieu'] . "</p>
                    <p style='width:35%; margin:auto;'> GPS : ". $Comment['gps_lieu'] . "</p>

                    <h4 style='color:white; text-align:center;margin-top:2%;'> Reviews </h4>
                    <article style='border:2px solid white; width:50%;margin:auto; width:50%; margin-bottom:2%; margin-top:2%; background-color:#001f3f;'>
                    <h6 style='color:white; text-align:center; font-size:22px;'>". $Comment['nom_user'] ."</h6>
                    <p style='width:80%; margin:auto; margin-bottom:2%;'> Date du commentaire : ". $Comment['date_comment'] . "</p>
                    <p style='width:80%; margin:auto; margin-bottom:2%;'> Commentaire : ". $Comment['text_comment'] . "</p>
                    
                    </article>
                    <p style='width:25%;'><a href='DeleteLieu.php?id=".$Comment['id_lieu']."' style='font-size:20px;'>Delete this Place</a></p>
                    <p style='width:25%;'><a href='UpdateLieu.php?id=".$Comment['id_lieu']."&nom=".$Comment['nom_lieu']."&img=".$Comment['img_lieu']."&topo=".$Comment['topo_lieu']."&gps=".$Comment['gps_lieu']."' style='font-size:20px;'>Update this Place</a></p>
                    <p style='width:25%;'><a href='AjouterComment.php?id=".$Comment['id_lieu']."' style='font-size:20px;'>Review this Place</a></p>
                
                    </article>";
    }
    

// $tableauLieu = $monLieuRepo->getListName();

// foreach ($tableauLieu as $Lieux) {
//     echo " <article style='border:1px solid white; width:50%;  margin-bottom:2%;'>
//                 <h3>" . $Lieux['nom_lieu'] . "</h3>
//                 <img style='display:block; margin-left:auto; margin-right:auto;' src=../images/". $Lieux['img_lieu']." width='320' height='200' ' "." </img>
//                 <p style='width:35%; margin:auto;'> Numéro id : ". $Lieux['id_lieu'] . "</p>
//                 <p style='width:35%; margin:auto;'> Topographie Lieu : ". $Lieux['topo_lieu'] . "</p>
//                 <p style='width:35%; margin:auto; margin-bottom:2%;'> Position : ". $Lieux['gps_lieu'] ."</p>
//                 <p style='width:25%;'><a href='DeleteLieu.php?id=".$Lieux['id_lieu']."' style='font-size:20px;'>Delete this Place</a></p>
//                 <p style='width:25%;'><a href='UpdateLieu.php?id=".$Lieux['id_lieu']."
//                 &nom=".$Lieux['nom_lieu']."&topo=".$Lieux['topo_lieu']."
//                 &gps=".$Lieux['gps_lieu']."' style='font-size:20px;'>Update this Place</a></p>
//                 <p style='width:25%;'><a href='AjouterComment.php?id=".$Lieux['id_lieu']."' style='font-size:20px;'>Review this Place</a></p>
//         </article>";
//}


?>
</section>
<?php

require '../vue/footer.php';

?>
