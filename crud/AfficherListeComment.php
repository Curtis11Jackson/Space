<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>List of Comments</h1>

<?php
$monCommentRepo = new CommentRepository($db);


$tableauComment = $monCommentRepo->getListName();

foreach ($tableauComment as $Commentz) {
    echo " <article>
                <p> Review : ". $Commentz['text_comment'] . "</p>
                <p> Date of visit ". $Commentz['date_comment'] . "</p>
                <p> User : ". $Commentz['fk_user'] . "</p>
                <p> Place reviewed : ". $Commentz['fk_lieu'] ."</p>
                <p style='width:15%;'><a href='DeleteComment.php?id=".$Commentz['id_comment']."' style='font-size:20px;'>Delete this comment</a></p>
                <p style='width:15%;'><a href='UpdateComment.php?id=".$Commentz['id_comment']."&text=".$Commentz['text_comment']."&date=".$Commentz['date_comment']." &user=".$Commentz['fk_user']. " &lieu=".$Commentz['fk_lieu']."' style='font-size:20px;'>Update this comment</a></p>
        </article>";
}
?>

<?php
 
require '../vue/footer.php';

?>
