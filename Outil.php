<?php



?>


<h1 style="margin-top: 19vw;">Outils</h1>

<form>
  <div class="row" style="margin-top: 2vw;">
    <div class="col">
      <input type="text" id='name' style="margin-left: 3vw; width: 40vw" class="form-control" placeholder="Tool name" >
    </div>
    <div class="col">
      <input type="text" id='role' name='role' style="margin-left: 3vw; margin-right: 3vw; width: 40vw"class="form-control" placeholder="Utility of tool">
    </div>

    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add tool</button>
  </div>
</form>


<?php
class Outil
{
  private $_id_outil;
  private $_nom_outil;
  private $_role_outil;


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
public function id_outil()
  {
    // retourne la valeur de l'id
    return $this->_id_outil;
  }

  public function nom_outil()
  {
    // retourne la valeur du nom
    return $this->_nom_outil;
  }

public function role_outil()
{
// retourne la valeur de la classification
  return $this->_role_outil;
}




// Seater//


  public function setId($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id_outil = $id;
    }
  }

  public function setNom($nom)
  {
    //permet une interaction avec le nom
    if (is_string($nom))
    {
      $this->_nom_outil = $nom;
    }
  }

  public function setRole($role)
  {
    // permet une interaction avec le role
    if (is_string($role))
    {
      $this->_role_outil = $role;
    }
  }




}


?>




<?php



 ?>
