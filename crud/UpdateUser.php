<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<?php
$id = $_GET['id'];
$prenom =  $_GET['prenom'];
$nom =  $_GET['nom'];
$mail = $_GET['mail'];
$login =  $_GET['login'];
$password = $_GET['password'];





?>

<h2 style="color:white; margin-top:4vh; text-align:center;">Update your info</h2>
  
  <form class="w-50" method="POST" action="ScriptUpdateUser.php" style="margin:auto;">
		 <div class="form-group">
    <input type="hidden" id="id" name="id"  value="<?php echo $id ?>">
  </div>
  <div class="form-group">
    <label for="prenom" style="color:white;">Prénom</label>
    <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $prenom ?>">
  </div>
  <div class="form-group">
    <label for="nom" style="color:white;">Nom</label>
    <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $nom ?>">
  </div>
  <div class="form-group">
    <label for="mail" style="color:white;">Email</label>
    <input type="text" id="mail" name="mail" class="form-control" value="<?php echo $mail ?>">
  </div>
  <div class="form-group">
    <label for="login" style="color:white;">Login</label>
    <input type="text" id="login" name="login" class="form-control" value="<?php echo $login ?>">
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Mot de Passe</label>
    <input type="password" id="password" name="password" class="form-control" value="<?php echo $password ?>">
  </div>
  <div style="width:15%; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Save changes</button>
  </div>
  </form>

<script>
function revealPassword() {
  var x = document.getElementById("inputPassword4");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php

require '../vue/footer.php';

?>
