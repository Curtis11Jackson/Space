<?php

class MineralRepository
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

  public function add(Mineral $mineral)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO mineraux (nom_min, class_min, fk_lieu) VALUES (:nom, :class, :lieu)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'nom' => $mineral->nom_min(),
      'class' => $mineral->class_min(),
      'lieu' => $mineral->fk_lieu()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $mineral->hydrate(array(
      'id_min' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM mineraux
      WHERE id_min = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new Mineral($donnees);
      }
  }

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère uniquement les noms de chaque recette
      $req = $this->_db->query("SELECT * FROM mineraux");
      //  transformer le résultat en array
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }


  public function update(Mineral $mineral)
  {
      // On prépare la requete afin de modifier un alien dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $alien
      $request = $this->_db->prepare("UPDATE mineraux SET nom_min = :nom, class_min = :class, fk_lieu = :lieu 
      WHERE id_min =".$mineral->id_min());
      $request->execute(array(
          'nom' => $mineral->nom_min(),
          'class' => $mineral->class_min(),
          'lieu' => $mineral->fk_lieu()
      ));
  }

  public function delete($id_min)
  {
    $request = $this->_db->exec("DELETE FROM mineraux WHERE id_min = ".$id_min);
    return $request;
  }


}

?>
