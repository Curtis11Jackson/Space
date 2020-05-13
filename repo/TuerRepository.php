<?php

class TuerRepository
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
    public function GetOutilAnimal()
    {
        $tabloAnimalOutilDonnees = [];
        //on prépare la requete SELECT
        $request = $this->_db->query("SELECT * FROM tuer 
INNER JOIN animal ON tuer.fk_ani = animal.id_ani 
INNER JOIN outil ON tuer.fk_outil = outil.id_outil");
    
        // On récupère le résultat dans un tableau
        
        while ($donnees = $request->fetch()) {
          array_push($tabloAnimalOutilDonnees, $donnees);
        }
        //echo var_dump($tabloMineralOutilDonnees);
        return $tabloAnimalOutilDonnees;
        //return new Situer($tabloMineralOutilDonnees);
}
}

?>