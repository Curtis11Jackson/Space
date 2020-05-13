<?php

class MangerRepository
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

    //création du 'JOIN'
    public function GetAnimalVegetal()
    {
      $tabloAnimalVegetal = [];
            //on prépare la requete SELECT
            $request = $this->_db->query("SELECT * FROM manger 
INNER JOIN animal ON manger.fk_ani = animal.id_ani 
INNER JOIN vegetal ON manger.fk_veg = vegetal.id_veg");
            // On récupère le résultat dans un tableau
            
            while ($donnees = $request->fetch()) {
              array_push($tabloAnimalVegetal, $donnees);
            }
            //echo var_dump($tabloAnimalVegetal);
            return $tabloAnimalVegetal;
    }
}

?>