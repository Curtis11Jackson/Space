<?php

require 'vue/header.php';
	
    class Alien 
{
//définition des attributs
private $_id_alien;
private $_nom_alien;
private $_race_alien;
private $_carac_alien;


//constructeur
public function __construct(array $donnees)
{
    $this->hydrate($donnees);
}

    //Fonction hydratation (pour donner des valeurs aux attributs)
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
        }
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

//Getters
public function id_alien()
{
    //retourne l'id de l'alien
    return $this->_id_alien;
}

public function nom_alien()
{
    //retourne le nom de l'alien
    return $this->_nom_alien;
}

public function race_alien()
{
    //retourne la race de l'alien
    return $this->_race_alien;
}
public function carac_alien()
{
    //retourne le caractère de l'alien
    return $this->_carac_alien;
}

 //SETTERS
 public function setid_alien($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_id_alien = $id;
     }
 }

 public function setnom_alien($nom)
 {
     if (is_string($nom)) {
         $this->_nom_alien = $nom;
     }
 }

 public function setrace_alien($race)
 {
     if (is_string($race)) {
         $this->_race_alien = $race;
     }
 }

 public function setcarac_alien($carac)
 {
     if (is_string($carac)) {
         $this->_carac_alien = $carac;
     }
 }


}

require 'vue/footer.php';

?>