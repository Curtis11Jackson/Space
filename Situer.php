<?php

class Situer
{
    //définition des attributs
    private $_fk_lieu;
    private $_fk_alien;


//Getters
    public function fk_lieu()
{
    //retourne l'fk du lieu
    return $this->_fk_lieu;
}

public function fk_alien()
{
    //retourne l'fk de l'alien
    return $this->_fk_alien;
}

 //SETTERS
 public function setFk_lieu($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_fk_lieu = $id;
     }
 }

  public function setFk_alien($id)
  {
      $id = (int) $id;
 
      if ($id > 0) {
          $this->_fk_alien = $id;
      }
  }

}

?>