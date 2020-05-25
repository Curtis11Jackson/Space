<?php

class CommentRepository
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

  public function add(Comment $comment)
  {
    //prepare une requete d'ajout de commentaire
    $request = $this->_db->prepare("INSERT INTO comment(text_comment, date_comment, fk_user, fk_lieu) 
    VALUES (:text, :date, :user, :lieu)");

    // tableau -> execute la requette   
    $request->execute(array(
      'text' => $comment->text_comment(),
      'date' => $comment->date_comment(),
      'user' => $comment->fk_user(),
      'lieu' => $comment->fk_lieu(),
    ));
    // On hydrate l'objet afin que son id deviennt l'id qui vient 
    //d'être créé
    $comment->hydrate(array(
      'id_comment' => $this->_db->lastInsertId()
    ));
  }

  public function getComment($id)
{
    if (is_int($id)) {
        //on prépare la requete SELECT
        $req = $this->_db->query("SELECT * FROM comment
    WHERE id_comment = $id");
        // On récupère le résultat dans un tableau
        $donnees = $req->fetch();
        // on retourne un nouvel objet Recette construit
        //avec les donnees récupérer de la BDD
        return new Comment($donnees);
    }
}

    public function update(Comment $comment)
{
    //prepare une requete UPDATE du Commentaire par rapport à son ID
    $q = $this->_db->prepare("UPDATE comment SET text_comment = :text, date_comment = :date,
    fk_user = :user, fk_lieu = :lieu 
    WHERE id_comment =".$comment->id_comment());
    //execute la requette avec un tableau d'association
    $q->execute(array(
        'text' => $comment->text_comment(),
        'date' => $comment->date_comment(),
        'user' => $comment->fk_user(),
        'lieu' => $comment->fk_lieu(),
        ));
}

public function delete($id)
{
    // execute une requete DELETE pour supprimer un commentaire avec son id
    $this->_db->exec("DELETE FROM comment WHERE id_comment=" .$id);
}

public function getListName()
{
    $tabloDonnees = [];
    //execute une requete SELECT qui récupère uniquement les noms de chaque recette
    $req = $this->_db->query("SELECT * FROM comment");
    //  transformer le résultat en array 
    while ($donnees = $req->fetch()) {
      array_push($tabloDonnees, $donnees);
    }
    // retourner cet array
    return $tabloDonnees;
}

}
