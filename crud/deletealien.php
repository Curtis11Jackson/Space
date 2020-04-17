<?php
require 'vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete an Alien</h1>
	</div>

	<form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Alien's Name</label>
            <input type="text" class="form-control" id="nom" name="race" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Alien's Species</label>
            <input type="text" class="form-control" id="race" name="race" placeholder="Species">
            </div>
        <div class="form-group col-md-6">
            <label for="carac">Alien's Character</label>
            <input type="text" class="form-control" id="carac" placeholder="Character">
        </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
	


<?php
require 'vue/footer.php';
?>