<?php

class UserRepository
{
  private $_db;

  public function __construct($db)
  {
    $this ->setDb($db);
  }

  //SETTER
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  public function add(User $user)
  {
    //prepare une requete d'ajout de animal
    $request = $this->_db->prepare("INSERT INTO user(prenom_user, nom_user, mail_user,
     login_user, passw_user, fk_lieu) 
    VALUES (:prenom, :nom, :mail, :login, :passw, :lieu)");
    //execute la requette avec un tableau d'association  
    $request->execute(array(
      'prenom' => $user->prenom_user(),
      'nom' => $user->nom_user(),
      'mail' => $user->mail_user(),
      'login' => $user->login_user(),
      'passw' => $user->passw_user(),
      'lieu' => $user->fk_lieu(),
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $user->hydrate(array(
      'id_user' => $this->_db->lastInsertId()
    ));
  }

public function get($id)
{
    if (is_int($id)) {
        //on prépare la requete SELECT
        $req = $this->_db->query("SELECT * FROM user
    WHERE id_user = $id");
        // On récupère le résultat dans un tableau
        $donnees = $req->fetch();
        // on retourne un nouvel objet Recette construit
        //avec les donnees récupérer de la BDD
        return new User($donnees);
    }
}

public function getLog($login, $pass)
{
    $tabloDonnees = [];
    if (is_string($login)) {
        //on prépare la requete SELECT
        $req = $this->_db->query("SELECT * FROM user 
        WHERE login_user ='". $login."' AND passw_user ='".$pass."'");
        // On récupère le résultat dans un tableau
        while ($donnees = $req->fetch()) {
          array_push($tabloDonnees, $donnees);
        }
        // retourner cet array
        return $tabloDonnees;
    }
}


public function delete($id)
{
    // execute une requete DELETE pour supprimer un animal avec son id
    $this->_db->exec("DELETE FROM user WHERE id_user=" .$id);
    // $this->_db->exec("DELETE FROM animal WHERE id_ani=" . $ani->id_ani());
}

public function update(User $user)
{
    //prepare une requete UPDATE de animal par rapport à son ID
    $q = $this->_db->prepare("UPDATE user SET prenom_user = :prenom, nom_user = :nom,
     mail_user = :mail, login_user = :login, passw_user = :passw, fk_lieu = :lieu 
    WHERE id_user =".$user->id_user());
    //execute la requette avec un tableau d'association
    $q->execute(array(
        'prenom' => $user->prenom_user(),
        'nom' => $user->nom_user(),
        'mail' => $user->mail_user(),
        'login' => $user->login_user(),
        'passw' => $user->passw_user(),
        'lieu' => $user->fk_lieu(),
        ));
}

public function getListName()
{
    $tabloDonnees = [];
    //execute une requete SELECT qui récupère uniquement les noms de chaque animal
    $req = $this->_db->query("SELECT * FROM user");
    //  transformer le résultat en array 
    while ($donnees = $req->fetch()) {
      array_push($tabloDonnees, $donnees);
    }
    // retourner cet array
    return $tabloDonnees;
}

public function getNameById($id)
{
    $tabloDonnees = [];

    $req = $this->_db->query("SELECT * FROM user WHERE id_user =".$id);
    //  transformer le résultat en array 
    while ($donnees = $req->fetch()) {
      array_push($tabloDonnees, $donnees);
    }
    // retourner cet array
    return $tabloDonnees;
}

public function getCountById()
{
    $nbRows = [];
    //execute une requete SELECT qui récupère le nombre de lignes de la table animal
    $req = $this->_db->query("SELECT COUNT(*) FROM user");
    $nbRows = $req->fetch();
    
    return $nbRows;
}

}



?>
