<?php
/**
 * 
 */
class Logement {
	private $id, $lat, $lng;
	private $photo, $nom, $tarif_nuit;
	
	public function __construct($id, $lat, $lng) {
		global $bdd;
		$this->id = $id;
		$this->lat = $lat;
		$this->lng = $lng;
		$query = "SELECT p.url_photo, b.nom, tarif_j FROM photos p JOIN bien b ON id_bien = ".intval($this->id)." WHERE preview = 1 LIMIT 1;";
		$réponse = $bdd->query($query);
		$données = $réponse->fetch();
		$this->photo = $données["url_photo"];
		$this->nom = utf8_encode($données["nom"]);
		$this->tarif_nuit = $données["tarif_j"];
	}
	
	public function getId()
	{
		return intval($this->id);
	}
	public function getLatitude()
	{
		return floatval($this->lat);
	}
	public function getLongitude()
	{
		return floatval($this->lng);
	}
	public function getPhoto()
	{
		return $this->photo;
	}
	public function getNom()
	{
		return $this->nom;
	}
	public function getTarifJournee()
	{
		return floatval($this->tarif_nuit);
	}
}

?>