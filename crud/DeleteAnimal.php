<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Delete an Animal</h1>
	</div>

<?php
	$id = $_GET['id'];


$monAniRepo = new AnimalRepository($db);
$monAniRepo->delete($id);

?>
<?php
require '../vue/footer.php';
?>
