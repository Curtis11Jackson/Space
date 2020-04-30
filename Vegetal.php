<?php

class Vegetal
{
    //définir les attributs
    private $_id_veg;
    private $_nom_veg;
    private $_taille_veg;
    private $_class_veg;
    private $_fk_lieu;
    

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
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTER
    public function id_veg()
    {
        //retourne l'id de l'ingrédient
        return $this->_id_veg;
    }

    public function nom_veg()
    {
        //retourne le nom de l'ingrédient
        return $this->_nom_veg;
    }

    public function taille_veg()
    {
        //retourne l'id de l'ingrédient
        return $this->_taille_veg;
    }

    public function class_veg()
    {
        //retourne l'id de l'ingrédient
        return $this->_class_veg;
    }

    public function fk_lieu()
    {
        //retourne l'id de l'ingrédient
        return $this->_fk_lieu;
    }


    //SETTER
    public function setId_veg($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_veg = $id;
        }
    }

    public function setNom_veg($nom)
    {
        if (is_string($nom)) {
            $this->_nom_veg = $nom;
        }
    }

    public function setTaille_veg($taille)
    {
        if (is_string($taille)) {
            $this->_taille_veg = $taille;
        }
    }

    public function setClass_veg($classif)
    {
        if (is_string($classif)) {
            $this->_class_veg = $classif;
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
