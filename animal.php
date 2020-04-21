<?php

class Animal
{
    //définir les attributs
    private $_id_ani;
    private $_nom_ani;

    //CONSTRUCTEUR
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

    //GETTER
    public function id_ani()
    {
        //retourne l'id de l'ingrédient
        return $this->_id_ani;
    }

    public function nom_ani()
    {
        //retourne le nom de l'ingrédient
        return $this->_nom_ani;
    }

    //SETTER
    public function setId_ani($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_ani = $id;
        }
    }

    public function setNom_ani($nom)
    {
        if (is_string($nom)) {
            $this->_nom_ani = $nom;
        }
    }
}

?>
