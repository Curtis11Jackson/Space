<?php

class MinerauxRepository
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

  public function add(mineraux $mineraux)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO mineraux(nom_min, class_min) VALUES (:nom, :class)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'nom' => $mineraux->nom_min(),
      'class' => $mineraux->class_min(),

    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $mineraux->hydrate(array(
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
      WHERE id_mineraux = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new mineraux($donnees);
      }
  }

  public function getListName($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM mineraux");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new mineraux($donnees);
      }
  }

  public function update($mineraux)
  {
      // On prépare la requete afin de modifier un alien dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $alien
      $request = $this->_db->prepare("UPDATE mineraux SET nom_mineraux = :nom");
      $request->execute(array(
          'nom' => $mineraux->nom_min()
      ));
  }

  public function delete($nom)
  {
    $request = $this->_db->exec("DELETE FROM mineraux WHERE nom = '$nom'" );
    return $request;
  }


}

?>
