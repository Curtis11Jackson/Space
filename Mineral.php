<?php
class Mineral
{
  private $_id_min;
  private $_nom_min;
  private $_class_min;
  private $_fk_lieu;


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
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
}




  //Getter//
public function id_min()
  {
    // retourne la valeur de l'id
    return $this->_id_min;
  }

  public function nom_min()
  {
    // retourne la valeur du nom
    return $this->_nom_min;
  }

public function class_min()
{
// retourne la valeur de la classification
  return $this->_class_min;
}

public function fk_lieu()
{
    return $this->_fk_lieu;
}


// Seater//


  public function setId_min($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id_min = $id;
    }
  }

  public function setNom_min($nom)
  {
    //permet une interaction avec le nom
    if (is_string($nom))
    {
      $this->_nom_min = $nom;
    }
  }

  public function setClass_min($class)
  {
    // permet une interaction avec la classification
    if (is_string($class))
    {
      $this->_class_min = $class;
    }
  }


  public function setFk_lieu($fklieu)
  {
      $fklieu = (int) $fklieu;

      if ($fklieu > 0) {
          $this->_fk_lieu = $fklieu;
      }
    }
}


?>





<?php



 ?>
