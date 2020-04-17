<?php 


function AffichePhotos($listephoto) {
	
foreach ($listephoto as $Photo) {
	
	echo " <div>
				<h3>" . $Photo['description'] . "</h3>
				<img src=". $Photo['photo']." width='420' height='360' class='img-fluid' "."</img>
				
		
		<a href='pagetype.php?id=".$Photo['id']."'>Visitez mon profil</a>
		</div>
		";
		
}
}


function  AffichePhotosPlus($listephoto) {
	
foreach ($listephoto as $Photo) {
	if ($id == $Animols['id']) {
	echo " <article>
				<h3>" . $Photo['description'] . "</h3>
				<img src=". $Photo['photo']." width='320' height='200' class='img-fluid' "."</img>
		<a href='pagetype.php?id=".$Photo['id']."'>Visitez mon profil</a>
		</article>";
}
}
}

function AfficheId($listephoto,$id) {

foreach ($listephoto as $Photo)  {
	if ($id == $Photo['id']) {
	echo " <article class='on'>
				<h3>" . $Photo['description'] . "</h3>
				<img src=". $Photo['photo']." width='280' height='160' class='img-fluid magic' "."</img>
				<p>" . $Photo['caption'] . "</p>
				<a href='index.php'>Go back</a>
			</article>"
				;
}
}
}





?>