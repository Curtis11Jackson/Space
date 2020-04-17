<?php
require 'vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add aliens</h1>
	</div>

<form method=POST action=scriptalien.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Alien name">
    </div>
    <div class="col">
      <input type="text" id="carac" class="form-control" placeholder="Caracteristics">
    </div>
    <div class="col">
      <input type="text" id="race" class="form-control" placeholder="Race">
    </div>
    <button type="submit" class="btn btn-primary">Add an alien</button>
  </div>
</form>


<?php
require 'vue/footer.php';
?>
