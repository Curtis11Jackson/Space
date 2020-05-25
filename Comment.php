<?php

class Comment
{
    //définition des attributs
    private $_id_comment;
    private $_text_comment;
    private $_date_comment;
    private $_fk_user;
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

    //Getters
    public function id_comment()
    {
        //retourne l'id du commentaire
        return $this->_id_comment;
    }

    public function text_comment()
    {
        //retourne le text_comment
        return $this->_text_comment;
    }

    public function date_comment()
    {
        //retourne la date_comment
        return $this->_date_comment;
    }

    public function fk_user()
    {
        //retourne l'fk_user
        return $this->_fk_user;
    }

    public function fk_lieu()
    {
        //retourne l'fk_lieu
        return $this->_fk_lieu;
    }

    //SETTERS
    public function setId_comment($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id_comment = $id;
        }
    }

    public function setText_comment($text)
    {
        if (is_string($text)) {
            $this->_text_comment = $text;
        }
    }

    public function setDate_comment($date)
    {
        if (is_string($date)) {
            $this->_date_comment = $date;
        }
    }

    public function setFk_user($user)
    {
        if (is_string($user)) {
            $this->_user_comment = $user;
        }
    }

    public function setFk_lieu($lieu)
    {
        if (is_string($lieu)) {
            $this->_lieu_comment = $lieu;
        }
    }
}

?>