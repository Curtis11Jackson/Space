<?php

require 'vue/header.php';

?>


<h1 style="margin-top: 19vw;">mineral</h1>

<form>
  <div class="row" style="margin-top: 2vw;">
    <div class="col">
      <input type="text" id=name style="margin-left: 3vw; width: 40vw" class="form-control" placeholder="mineral name" >
    </div>
    <div class="col">
      <input type="text" id=mineral style="margin-left: 3vw; margin-right: 3vw; width: 40vw"class="form-control" placeholder="mineral classification">
    </div>

    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add mineral</button>
  </div>
</form>

<?php
class Mineral
{
  private $_id_min,
  private $_nom_min,
  private $_class_min,


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
  return $this->_class;
}




// Seater//


  public function setId($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id_min = $id;
    }
  }

  public function setNom($nom)
  {
    //permet une interaction avec le nom
    if (is_string($nom))
    {
      $this->_nom_min = $nom;
    }
  }

  public function setClass($class)
  {
    // permet une interaction avec la classification
    if (is_string($class))
    {
      $this->_class_min = $class;
    }
  }




}


?>





<?php

require 'vue/footer.php';

 ?>
