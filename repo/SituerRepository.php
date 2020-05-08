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
    public function Situation()
    {
            //on prépare la requete SELECT
            $request = $this->_db->query("SELECT * FROM animal 
            INNER JOIN lieu ON animal.fk_ani = lieu.fk_lieu");
            // On récupère le résultat dans un tableau
            $donnees = $request->fetch();
            
            return new Situer($donnees);
    }

}

?>