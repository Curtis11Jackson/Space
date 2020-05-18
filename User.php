<?php

class User
{
    //définir les attributs
    private $_id_user;
    private $_prenom_user;
    private $_nom_user;
    private $_mail_user;
    private $_login_user;
    private $_passw_user;
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
    public function id_user()
    {
        return $this->_id_user;
    }
 
    public function prenom_user()
    {
        return $this->_prenom_user;
    }

    public function nom_user()
    {
        return $this->_nom_user;
    }

    public function mail_user()
    {
        return $this->_mail_user;
    }

    public function login_user()
    {
        return $this->_login_user;
    }

    public function passw_user()
    {
        return $this->_passw_user;
    }

    public function fk_lieu()
    {
        return $this->_fk_lieu;
    }

    //SETTER
    public function setId_user($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_user = $id;
        }
    }


    public function setPrenom_user($prenom)
    {
        if (is_string($prenom)) {
            $this->_prenom_user = $prenom;
        }
    }

    public function setNom_user($nom)
    {
        if (is_string($nom)) {
            $this->_nom_user = $nom;
        }
    }

    public function setMail_user($mail)
    {
        if (is_string($mail)) {
            $this->_mail_user = $mail;
        }
    }

    public function setLogin_user($login)
    {
        if (is_string($login)) {
            $this->_login_user = $login;
        }
    }

    public function setPassw_user($psswd)
    {
        if (is_string($psswd)) {
            $this->_passw_user = $psswd;
        }
    }

    public function setFk_lieu($lieu)
    {
        $lieu = (int) $lieu;

        if ($lieu > 0) {
            $this->_fk_lieu = $lieu;
        }
    }

}

?>
