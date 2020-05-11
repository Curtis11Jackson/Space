<?php

require '../vue/header.php';

?>

<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
$role = $_GET['role'];
?>

<h1>Update Outils</h1>

<form method=POST action=ScriptUpdateOutil.php>
  <div class="row">
  <div class="col-1">
      <input type="hidden" id="id" name="id" class="form-control"  value="<?php echo $id ?>" >
    </div>
    <div class="col-3">
      <input type="text" id="nom" name="nom" class="form-control"  value="<?php echo $nom ?>" required placeholder="name">
    </div>
    <div class="col-3">
      <input type="text" id="role" name="role" class="form-control" value="<?php echo $role ?>" required placeholder="role">
    </div>

    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add tool</button>
  </div>
</form>







<?php

require '../vue/footer.php';

 ?>
