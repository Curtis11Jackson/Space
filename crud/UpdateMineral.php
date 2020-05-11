<?php

require '../vue/header.php';

?>


<h1>Update Mineral</h1>

<?php
$ident = $_GET['id'];
$nom = $_GET['nom'];
$class = $_GET['class'];
$lieu = $_GET['lieu'];
?>

<form method=POST action=ScriptUpdateMineral.php>
  <div class="row" style="margin-top: 2vw;">
  <div class="col">
      <input type="hidden" id="ident" name="ident" value="<?php echo $ident ?>" class="form-control">
    </div>
    <div class="col">
      <input type="text" id="name" name="nom" value="<?php echo $nom ?>" class="form-control" placeholder="name">
    </div>
    <div class="col">
      <input type="text" id="class" name="class" value="<?php echo $class ?>" class="form-control" placeholder="Classification">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" value="<?php echo $lieu ?>" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Update mineral</button>
  </div>
</form>







<?php

require '../vue/footer.php';

 ?>
