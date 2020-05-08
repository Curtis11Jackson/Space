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
<<<<<<< HEAD
            $request = $this->_db->query("SELECT * FROM Animal
            INNER JOIN Lieu
            ON Animal.fk_lieu = Lieu.id_lieu");
=======
            $request = $this->_db->query("SELECT * FROM animal INNER JOIN lieu ON animal.fk_ani = lieu.fk_lieu");
>>>>>>> 22d3450ee7da38b37d0fdedd8c62754ff9406cd4
            // On récupère le résultat dans un tableau
            $donnees = $request->fetch();
            
            return new Situer($donnees);
    }

}

?>