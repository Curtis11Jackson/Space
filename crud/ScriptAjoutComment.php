<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Thank you for adding a comment</h1>
</div>

<?php

$text = $_POST['text'];
$date = $_POST['date'];
$user = $_POST['user'];
$lieu = $_POST['lieu'];
$id = 4;

$tabloComment = array(
  "id_comment" => $id,    
  "text_comment" => $text,
  "date_comment" => $date,
  'fk_user' => $user,
  'fk_lieu' => $lieu);

$monComment = new Comment($tabloComment);

$monCommentRepo = new CommentRepository($db);

$monCommentRepo -> add($monComment);

  echo " <article>
              <p> Comment : ". $tabloComment['text_comment'] . "</p>
              <p> Date of visit : ". $tabloComment['date_comment'] . "</p>
              <p> Wrote by : ". $tabloComment['fk_user'] . "</p>
              <p> Place reviewed : ". $tabloComment['fk_lieu'] . "</p>
      </article>";

?>


<?php

require '../vue/footer.php';

?>