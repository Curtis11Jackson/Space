<?php

class AlienRepository
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

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM alien
      WHERE id_alien = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new Alien($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère uniquement les noms de chaque recette
      $req = $this->_db->query("SELECT * FROM alien");
      //  transformer le résultat en array 
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }

  public function update($alien)
  {
      // On prépare la requete afin de modifier un alien dans 
      // la BDD, puis on execute en injectant 
      // l'attribut $_nom de l'objet $alien
      $request = $this->_db->prepare("UPDATE alien SET nom_alien = :nom");
      $request->execute(array(
          'nom' => $alien->nom_alien()
      ));
  }

  public function delete($id_alien)
  {
      // execute une requete DELETE pour supprimer un alien avec son id
      $this->_db->exec("DELETE FROM alien WHERE id_alien=".$id_alien);
      
  }

}

?>

