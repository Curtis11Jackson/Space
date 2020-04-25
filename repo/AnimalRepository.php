<?php

class AnimalRepository
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

  public function add(Animal $animal)
  {
    //prepare une requete d'ajout de recette
    $request = $this->_db->prepare("INSERT INTO animal(nom_ani, race_ani, carac_ani, alim_ani, force_ani) 
    VALUES (:nom, :race, :carac, :alim, :force)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'nom' => $animal->nom_ani(),
      'race' => $animal->race_ani(),
      'carac' => $animal->carac_ani(),
      'alim' => $animal->alim_ani(),
      'force' => $animal->force_ani()
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $animal->hydrate(array(
      'id_alien' => $this->_db->lastInsertId()
    ));
  }

public function get($id)
{
    if (is_int($id)) {
        //on prépare la requete SELECT
        $req = $this->_db->query("SELECT * FROM animal
    WHERE id_ani = $id");
        // On récupère le résultat dans un tableau
        $donnees = $req->fetch();
        // on retourne un nouvel objet Recette construit
        //avec les donnees récupérer de la BDD
        return new Animal($donnees);
    }
}

public function delete($rec)
{
    // execute une requete DELETE pour supprimer une recette avec son id
    $this->_db->exec("DELETE FROM animal WHERE id_ani=" . $rec->id_ani());
}

public function update($rec)
{
    //prepare une requete UPDATE de recette par rapport à son ID
    $q = $this->_db->prepare("UPDATE animal SET nom_ani = :nom");
    //execute la requette avec un tableau d'association
    $q->execute(array(
        'nom' => $rec->nom_ani()
    ));
}

public function getListName()
{
    //execute une requete SELECT qui récupère uniquement les noms de chaque recette
    $req = $this->_db->query("SELECT * FROM animal");
    //  transformer le résultat en array 
    $donnees = $req->fetch();
    // retourner cet array
    return $donnees;
}
}



?>
