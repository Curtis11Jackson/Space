<?php

class LieuRepository
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
    //prepare une requete d'ajout de lieu
    $request = $this->_db->prepare("INSERT INTO lieu(nom_lieu, topo_lieu, gps_lieu) VALUES (:nom, :topo, :gps)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'nom' => $lieu->nom_lieu(),
      'topo' => $lieu->topo_lieu(),
      'gps' => $lieu->gps_lieu()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $lieu->hydrate(array(
      'id_lieu' => $this->_db->lastInsertId()
    ));
  }

  //création du 'read'
  public function get($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM lieu
      WHERE id_lieu = $id");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new Lieu($donnees);
      }
  }

  public function getListName($id)
  {
      //on vérifie que le paramètre est bien un id
      if (is_int($id)) {
          //on prépare la requete SELECT
          $request = $this->_db->query("SELECT * FROM alien");
          // On récupère le résultat dans un tableau
          $donnees = $request->fetch();
          // on retourne un nouvel objet alien construit
          //avec les donnees récupérer de la BDD
          return new Lieu($donnees);
      }
  }

  public function update($lieu)
  {
      // On prépare la requete afin de modifier un lieu dans 
      // la BDD, puis on execute en injectant 
      // l'attribut $_nom de l'objet $lieu
      $request = $this->_db->prepare("UPDATE lieu SET nom_lieu = :nom");
      $request->execute(array(
          'nom' => $lieu->nom_lieu()
      ));
  }

  public function delete($nom)
  {
    $request = $this->_db->exec("DELETE FROM lieu WHERE nom = '$nom'" );
    return $request;
  }


}

?>
