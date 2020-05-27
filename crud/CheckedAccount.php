<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<h2 style='background-color:red; border:2px white solid; 
    width:30%;text-align:center; margin:auto; margin-top:4%;'>
    Welcome Back</h2>

<?php
$id = $_GET['id'];


$monUserRepo = new UserRepository($db);
$donnees2 = $monUserRepo->getNameById($id);

//echo var_dump($donnees2);

if ($donnees2 != false) {
    echo "<article style='margin-bottom:2vh;'> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:2vh;'>
   
    Firstname : ".$donnees2[0]['prenom_user']." <br>
    Lastname : ".$donnees2[0]['nom_user']."
    </h2></article>";    
}
else{
    echo " <article> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:4%;'> id incorrect
    </h2>
        </article>";
}
?>

<article>
<p style="margin:auto; width:50%; margin-bottom:2vh;">You are signed in, you can now create, update and delete articles in the database.</p></article>

<div class="justify-content-center shadow  rounded">
	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner justify-content-center">


			<?php
			$reponse = $db->query('SELECT * FROM lieu ORDER BY id_lieu');

			$isActive = true;

			while ($donnees = $reponse->fetch()) {



			?>

				
				<div class="<?php if ($isActive) echo 'active'; ?> carousel-item justify-content-center">
				<h2 class="d-block w-100 align-items-center" style="background-color:white; text-align:center; margin-left:50%; padding:2px;"><?php echo $donnees['nom_lieu']; ?></h2>
					<img class="d-block w-100 align-items-center" style="margin-left:50%;" src="../images/<?php echo $donnees['img_lieu']; ?>">
				</div>

				
			<?php
				$isActive = false;
			}
			?>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button"  data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only ">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only ">Next</span>
		</a>
	</div>
</div>
</div>
</div>

<?php
require '../vue/footer.php';

?>