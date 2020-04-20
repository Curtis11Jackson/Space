<?php
require 'vue/header.php';

class Alien
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

  public function add(Alien $alien)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO alien(nom_alien, race_alien, carac_alien) VALUES (:nom, :race, :carac)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'nom' => $alien->nom_alien(),
      'race' => $alien->race_alien(),
      'carac' => $alien->carac_alien()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $alien->hydrate(array(
      'id_alien' => $this->_db->lastInsertId()
    ));
  }
}

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
<<<<<<< HEAD
require 'vue/footer.php';
?>
=======
require '../vue/footer.php';
?>
>>>>>>> 71b4914a18e6ace784659061504e09e72c3ca812
