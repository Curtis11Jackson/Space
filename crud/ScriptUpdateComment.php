<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have modified your comment</h1>
</div>

<?php

$id = $_POST['id'];
$text = $_POST['text'];
$date = $_POST['date'];
$user = $_POST['user'];
$lieu = $_POST['lieu'];

$tabloComment = array(
    'id_comment' => $id,
    'text_comment' => $text,
    'date' => $date,
    'fk_user' => $user,
    'fk_lieu' => $lieu,
);


$monComment = new Comment($tabloComment);


$monCommentRepo = new CommentRepository($db);
$monCommentRepo->update($monComment);


echo " <article>
<p>" . $tabloComment['text_comment'] . "</p>
<p> Date of visit : ". $tabloComment['date_comment'] . "</p>
<p> User : ". $tabloComment['fk_user'] ."</p>
<p> Place reviewed : ". $tabloComment['fk_lieu'] ."</p>
</article>";


?>


<?php
require '../vue/footer.php';
?>
