<?php
class Lieu
{
    //définir les attributs
    private $_id_lieu;
    private $_nom_lieu;
    private $_img_lieu;
    private $_topo_lieu;
    private $_gps_lieu;

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

    public function img_lieu()
    {
        //retourne l'image du lieu
        return $this->_img_lieu;
    }

    public function topo_lieu()
    {
        //retourne la topographie du lieu
        return $this->_topo_lieu;
    }

    public function gps_lieu()
    {
        //retourne la topographie du lieu
        return $this->_gps_lieu;
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

    public function setImg_lieu($img)
    {
        if (is_string($img)) {
            $this->_img_lieu = $img;
        }
    }

    public function settopo_lieu($topo)
    {
        if (is_string($topo)) {
            $this->_topo_lieu = $topo;
        }
    }

    public function setgps_lieu($gps)
    {
        if (is_string($gps)) {
            $this->_gps_lieu = $gps;
        }
    }
}

