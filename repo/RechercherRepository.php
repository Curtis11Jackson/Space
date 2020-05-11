<?php

class RechercherRepository
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
    public function GetMineralOutil()
    {
      $tabloMineralOutilDonnees = [];
            //on prépare la requete SELECT
            $request = $this->_db->query("SELECT * FROM mineraux 
INNER JOIN rechercher ON rechercher.fk_min = mineraux.id_min AND rechercher.fk_outil = outil.id_outil");
            // $request = $this->_db->query("SELECT * FROM mineraux 
            // LEFT JOIN lieu ON mineraux.fk_outil = outil.id_outil");
            
            // On récupère le résultat dans un tableau
            
            while ($donnees = $request->fetch()) {
              array_push($tabloMineralOutilDonnees, $donnees);
            }
            // echo var_dump($tabloMineralOutilDonnees);
            return $tabloMineralOutilDonnees;
            //return new Situer($tabloMineralOutilDonnees);
    }
}

?>