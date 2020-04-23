<?php
class VegetalRepository
{
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


  public function add(Vegetal $vegetal)
  {
      //prepare une requete d'ajout de recette
      $q = $this->_db->prepare("INSERT INTO vegetal(nom_veg, taille_veg, class_veg) VALUES (:nom, :taille, :class)");
      //execute la requette avec un tableau d'association  
      $q->execute(array(
          'nom' => $vegetal->nom_veg(),
          'taille' => $vegetal->taille_veg(),
          'class' => $vegetal->class_veg()
      ));
      // On hydrate l'objet afin que son id deviennt l'id qui vient 
      //d'être créé
      $vegetal->hydrate(array(
          'id_veg' => $this->_db->lastInsertId()
      ));
  }

  public function get($id)
  {
      if (is_int($id)) {
          //on prépare la requete SELECT
          $req = $this->_db->query("SELECT * FROM vegetal
      WHERE id_veg = $id");
          // On récupère le résultat dans un tableau
          $donnees = $req->fetch();
          // on retourne un nouvel objet Recette construit
          //avec les donnees récupérer de la BDD
          return new Vegetal($donnees);
      }
  }

  public function delete($rec)
  {
      // execute une requete DELETE pour supprimer une recette avec son id
      $this->_db->exec("DELETE FROM vegetal WHERE id_veg=" . $rec->id_veg());
  }

  public function update($rec)
  {
      //prepare une requete UPDATE de recette par rapport à son ID
      $q = $this->_db->prepare("UPDATE vegetal SET nom_veg = :nom");
      //execute la requette avec un tableau d'association
      $q->execute(array(
          'nom' => $rec->nom_veg()
      ));
  }

  public function getListName()
  {
      //execute une requete SELECT qui récupère uniquement les noms de chaque recette
      $req = $this->_db->query("SELECT * FROM vegetal");
      //  transformer le résultat en array 
      $donnees = $req->fetch();
      // retourner cet array
      return $donnees;
  }


}
?>
