<?php
require 'vue/header.php';

class Lieu
{

  //connexion à la bdd
  private $_db;

  public function __construct($db)
  {
    $this ->setDb($db);
  }

  //SETTER
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  public function add(Lieu $lieu)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO lieu(nom_lieu, topo_lieu, GPS_lieu) VALUES (:nom, :topo, :GPS)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'nom' => $lieu->nom_lieu(),
      'topo' => $lieu->topo_lieu(),
      'GPS' =>  $lieu->gps_lieu()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $lieu->hydrate(array(
      'id_lieu' => $this->_db->lastInsertId()
    ));
  }
}

?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add places</h1>
	</div>

<form method=POST action=scriptlieu.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Place name">
    </div>
    <div class="col">
      <input type="text" id="topo" class="form-control" placeholder="Topography">
    </div>
    <div class="col">
      <input type="text" id="GPS" class="form-control" placeholder="GPS">
    </div>
    <button type="submit" class="btn btn-primary">Add a place</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
