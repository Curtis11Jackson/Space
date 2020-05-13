<?php

class Tuer
{
    //définition des attributs
    private $_fk_ani;
    private $_fk_outil;


//Getters
    public function fk_ani()
{
    //retourne le fk_ani
    return $this->_fk_ani;
}

public function fk_outil()
{
    //retourne le fk_outil
    return $this->_fk_outil;
}

 //SETTERS
 public function setFk_ani($id)
 {
     $id = (int) $id;

     if ($id > 0) {
         $this->_fk_ani = $id;
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