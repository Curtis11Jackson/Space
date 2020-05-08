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
            $request = $this->_db->query("SELECT * FROM Animal
            INNER JOIN Lieu
            ON Animal.fk_lieu = Lieu.id_lieu");
            // On récupère le résultat dans un tableau
            $donnees = $request->fetch();
            // on retourne un nouvel objet alien construit
            //avec les donnees récupérer de la BDD
            return new Situer($donnees);
    }

}

?>