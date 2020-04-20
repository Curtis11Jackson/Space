<?php

require '../vue/header.php';

?>
	

	<div class="banner">
	<h1 style="margin-bottom:4vh">Modify a Place</h1>
	</div>
	
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name of the Place</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Topography of the Place</label>
            <input type="text" class="form-control" id="race" name="race" placeholder="Topography">
            </div>
        <div class="form-group col-md-6">
            <label for="carac">GPS Coordinates</label>
            <input type="text" class="form-control" id="gps" placeholder="GPS">
        </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	
<?php

require '../vue/footer.php';

?>