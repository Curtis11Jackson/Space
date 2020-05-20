<?php


require 'identifier.php';
require 'chargeauto.php';
require 'vue/header.php';

?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Space Exploration</h1>
</div>


<h2 style="color:white; margin-top:4vh; text-align:center;">Log In</h2>
  
  <form class="w-50" method="POST" action="crud/CheckAccount.php" style="margin:auto;">
  <div class="form-group">
    <label for="login" style="color:white;">Login</label>
    <input type="text" id="login" name="login" class="form-control" placeholder="Renseignez votre Login" required>
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Mot de Passe</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Renseignez votre Mot de Passe" required>
  </div>
  <div style="width:15%; margin:auto;">
  <button type="submit" class="btn btn-success" style="margin:auto;">Accept</button>
  </div>
  <a href="crud/CreateUser.php" style="font-size:16px;"  class="btn btn-primary">
     Create an account
    </a>
  </form>

<?php

require 'vue/footer.php';

?>