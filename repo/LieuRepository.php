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
    $request = $this->_db->prepare("INSERT INTO lieu(nom_lieu, img_lieu, topo_lieu, gps_lieu) VALUES (:nom, :img, :topo, :gps)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'nom' => $lieu->nom_lieu(),
      'img' => $lieu->img_lieu(),
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

  public function getListName()
  {
      $tabloDonnees = [];
      //execute une requete SELECT qui récupère uniquement les noms de chaque recette
      $req = $this->_db->query("SELECT * FROM lieu");
      //  transformer le résultat en array 
      while ($donnees = $req->fetch()) {
        array_push($tabloDonnees, $donnees);
      }
      // retourner cet array
      return $tabloDonnees;
  }

  public function update(Lieu $lieu)
  {
      // On prépare la requete afin de modifier un lieu dans 
      // la BDD, puis on execute en injectant 
      // l'attribut $_nom de l'objet $lieu
      $request = $this->_db->prepare("UPDATE lieu SET nom_lieu = :nom, img_lieu = :img, topo_lieu= :topo, gps_lieu= :gps WHERE id_lieu=".$lieu->id_lieu());
      $request->execute(array(
          'nom' => $lieu->nom_lieu(),
          'img' => $lieu->img_lieu(),
          'topo' => $lieu->topo_lieu(),
          'gps' => $lieu->gps_lieu(),
      ));
  }

  public function delete($id_lieu)
  {
    $request = $this->_db->exec("DELETE FROM lieu WHERE id_lieu =".$id_lieu);
    return $request;
  }

  public function getCountById()
  {
      $tabloCount = [];
      //execute une requete SELECT qui récupère uniquement les noms de chaque recette
      $req = $this->_db->query("SELECT COUNT(*) FROM lieu");
      $tabloCount = $req->fetch();
  
      return $tabloCount;
  }

}

?>
