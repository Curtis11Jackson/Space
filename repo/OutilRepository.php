<?php

class OutilRepository
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

  public function add(outil $outil)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO outil(nom_outil, role_outil) VALUES (:nom, :role)");
    //execute la requette avec un tableau d'association
    $request->execute(array(
      'nom' => $alien->nom_outil(),
      'race' => $alien->role_outil(),

    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient
    //d'être créé
    $outil->hydrate(array(
      'id_outil' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM outil
      WHERE id_outil = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new outil($donnees);
      }
  }

  public function getListName($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM outil");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new outil($donnees);
      }
  }

  public function update($outil)
  {
      // On prépare la requete afin de modifier un alien dans
      // la BDD, puis on execute en injectant
      // l'attribut $_nom de l'objet $outil
      $request = $this->_db->prepare("UPDATE outil SET nom_outil = :nom");
      $request->execute(array(
          'nom' => $outil->nom_outil()
      ));
  }

  public function delete($nom)
  {
    $request = $this->_db->exec("DELETE FROM outil WHERE nom = '$nom'" );
    return $request;
  }


}

?>