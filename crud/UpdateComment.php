<?php

require '../vue/header.php';

?>


<h1>Update your comment</h1>

<?php
$id = $_GET['id'];
$text = $_GET['text'];
$date = $_GET['date'];
$user = $_GET['user'];
$lieu = $_GET['lieu'];
?>

<form method=POST action=ScriptUpdateComment.php>
  <div class="row" style="margin-top: 2vw;">
  <div class="col">
      <input type="hidden" id="id" name="id" value="<?php echo $id ?>" class="form-control">
    </div>
    <div class="col">
      <input type="text" id="text" name="text" value="<?php echo $text ?>" class="form-control">
    </div>
    <div class="col">
      <input type="date" id="date" name="date" value="<?php echo $date ?>" class="form-control">
    </div>
    <div class="col">
      <input type="text" id="user" name="user" value="<?php echo $user ?>" class="form-control">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" value="<?php echo $lieu ?>" class="form-control">
    </div>
    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Save Comment</button>
  </div>
</form>







<?php

require '../vue/footer.php';

 ?>
