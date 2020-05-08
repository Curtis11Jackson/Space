<?php

class SituerRepository
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
    public function GetLieuAnimal()
    {
      $tabloDonnees = [];
            //on prépare la requete SELECT
            $request = $this->_db->query("SELECT * FROM animal 
            INNER JOIN lieu ON animal.fk_lieu = lieu.id_lieu");
            // $request = $this->_db->query("SELECT * FROM animal 
            // LEFT JOIN lieu ON animal.fk_lieu = lieu.id_lieu");
            
            // On récupère le résultat dans un tableau
            
            while ($donnees = $request->fetch()) {
              array_push($tabloDonnees, $donnees);
            }
            //echo var_dump($tabloDonnees);
            return $tabloDonnees;
            //return new Situer($tabloDonnees);
    }

    public function GetLieuMineral()
    {
      $tabloMineralDonnees = [];
            //on prépare la requete SELECT
            $request = $this->_db->query("SELECT * FROM mineraux 
            INNER JOIN lieu ON mineraux.fk_lieu = lieu.id_lieu");
            // $request = $this->_db->query("SELECT * FROM animal 
            // LEFT JOIN lieu ON animal.fk_lieu = lieu.id_lieu");
            
            // On récupère le résultat dans un tableau
            
            while ($donnees = $request->fetch()) {
              array_push($tabloMineralDonnees, $donnees);
            }
            //echo var_dump($tabloMineralDonnees);
            return $tabloMineralDonnees;
            //return new Situer($tabloMineralDonnees);
    }
}

?>