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

        if (method_exists($this, $method)) {
            $this->$method($value);
        }
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


  public function setId_outil($id)
  {
    // permet une interaction avec l'id
    $id = (int) $id;

    if ($id > 0)
    {
      $this->_id_outil = $id;
    }
  }

  public function setNom_outil($nom)
  {
    //permet une interaction avec le nom
    if (is_string($nom))
    {
      $this->_nom_outil = $nom;
    }
  }

  public function setRole_outil($role)
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
