<?php

class RecolterRepository
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
    public function GetVegetalOutil()
    {
        $tabloVegetauxOutilDonnees = [];
        //on prépare la requete SELECT
        $request = $this->_db->query("SELECT * FROM recolter 
INNER JOIN vegetal ON recolter.fk_veg = vegetal.id_veg 
INNER JOIN outil ON recolter.fk_outil = outil.id_outil");
    
        // On récupère le résultat dans un tableau
        
        while ($donnees = $request->fetch()) {
          array_push($tabloVegetauxOutilDonnees, $donnees);
        }
        //echo var_dump($tabloMineralOutilDonnees);
        return $tabloVegetauxOutilDonnees;
        //return new Situer($tabloMineralOutilDonnees);
}
}

?>