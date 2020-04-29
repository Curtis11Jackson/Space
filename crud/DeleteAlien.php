<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">You have Deleted this Alien</h1>
	</div>

<?php
    
    $id = $_GET['id'];


    $monAliRepo = new AlienRepository($db);
    $monAliRepo->delete($id);

    

?>


?>

<?php
require '../vue/footer.php';
?>
