<?php

require '../vue/header.php';

class Alien
{
    //caractérisé par la connexion à la base de données
    private $_db; //va être instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    //SETTER
    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }


    public function update($alien)
    {
        //prepare une requete UPDATE de alien par rapport à son ID
        $request = $this->_db->prepare("UPDATE alien SET nom_alien = :nom, race_alien = :race, carac_alien = :carac");
        //execute la requete avec un tableau d'association
        $request->execute(array(
            'nom' => $alien->nom_alien(),
            'race_alien' => $alien->race_alien(),
            'carac_alien' => $alien->carac_alien()
        ));
    }
}


?>
<div class="banner">
    <h1 style="margin-bottom:4vh">Update Alien</h1>
</div>

<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Alien's Name</label>
            <input type="text" class="form-control" id="nom" name="race" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Alien's Species</label>
            <input type="text" class="form-control" id="race" name="race" placeholder="Species">
        </div>
        <div class="form-group col-md-6">
            <label for="carac">Alien's Character</label>
            <input type="text" class="form-control" id="carac" placeholder="Character">
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

require '../vue/footer.php';

?>