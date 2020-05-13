<?php

class Recolter
{
    //définition des attributs
    private $_fk_veg;
    private $_fk_outil;


//Getters
    public function fk_veg()
{
    //retourne le fk_veg
    return $this->_fk_veg;
}

public function fk_outil()
{
    //retourne le fk_outil
    return $this->_fk_outil;
}

 //SETTERS
 public function setFk_veg($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_fk_veg = $id;
     }
 }

  public function setFk_outil($id)
  {
      $id = (int) $id;
 
      if ($id > 0) {
          $this->_fk_outil = $id;
      }
  }

}

?>