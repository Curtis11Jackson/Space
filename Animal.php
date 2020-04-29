<?php

class Animal
{
    //définir les attributs
    private $_id_ani;
    private $_nom_ani;
    private $_alim_ani;
    private $_carac_ani;
    private $_force_ani;
    private $_race_ani;
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
    public function id_ani()
    {
        return $this->_id_ani;
    }
 
    public function nom_ani()
    {
        return $this->_nom_ani;
    }

    public function alim_ani()
    {
        return $this->_alim_ani;
    }

    public function carac_ani()
    {
        return $this->_carac_ani;
    }

    public function force_ani()
    {
        return $this->_force_ani;
    }

    public function race_ani()
    {
        return $this->_race_ani;
    }

    public function fk_lieu()
    {
        return $this->_fk_lieu;
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

    public function setAlim_ani($alim)
    {
        if (is_string($alim)) {
            $this->_alim_ani = $alim;
        }
    }

    public function setCarac_ani($carac)
    {
        if (is_string($carac)) {
            $this->_carac_ani = $carac;
        }
    }

    public function setForce_ani($force)
    {
        if (is_string($force)) {
            $this->_force_ani = $force;
        }
    }

    public function setRace_ani($race)
    {
        if (is_string($race)) {
            $this->_race_ani = $race;
        }
    }

    public function setFk_lieu($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_fk_lieu = $id;
        }
    }

}

?>
