<?php

require '../vue/header.php';

class Lieu
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


    public function update($lieu)
    {
        //prepare une requete UPDATE de lieu par rapport à son ID
        $request = $this->_db->prepare("UPDATE lieu SET nom_lieu = :nom, topo_lieu = :topo, GPS_lieu = :GPS");
        //execute la requete avec un tableau d'association
        $request->execute(array(
            'nom' => $lieu->nom_lieu(),
            'topo' => $lieu->topo_lieu(),
            'GPS' => $lieu->GPS_lieu()
        ));
    }
}


?>
	

	<div class="banner">
	<h1 style="margin-bottom:4vh">Modify a Place</h1>
	</div>
	
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="name">Name of the Place</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Topography of the Place</label>
            <input type="text" class="form-control" id="race" name="race" placeholder="Topography">
            </div>
        <div class="form-group col-md-6">
            <label for="carac">GPS Coordinates</label>
            <input type="text" class="form-control" id="gps" placeholder="GPS">
        </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	
<?php

require '../vue/footer.php';

?>
