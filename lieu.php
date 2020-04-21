<?php

require 'vue/header.php';

class lieu
{
    //définir les attributs
    private $_id_lieu;
    private $_nom_lieu;
    private $_topo_lieu;
    private $_GPS_lieu;

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

    //Getters
    public function id_lieu()
    {
        //retourne l'id du lieu
        return $this->_id_lieu;
    }

    public function nom_lieu()
    {
        //retourne le nom du lieu
        return $this->_nom_lieu;
    }

    public function topo_lieu()
    {
        //retourne la topographie du lieu
        return $this->_topo_lieu;
    }

    public function GPS_lieu()
    {
        //retourne la topographie du lieu
        return $this->_GPS_lieu;
    }

    //SETTERS
    public function setid_lieu($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_lieu = $id;
        }
    }

    public function setnom_lieu($nom)
    {
        if (is_string($nom)) {
            $this->_nom_lieu = $nom;
        }
    }

    public function settopo_lieu($topo)
    {
        if (is_string($topo)) {
            $this->_topo_lieu = $topo;
        }
    }

    public function setgps_lieu($GPS)
    {
        if (is_string($GPS)) {
            $this->_GPS_lieu = $GPS;
        }
    }
}



require 'vue/footer.php';
