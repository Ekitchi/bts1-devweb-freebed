<?
/**
 * 
 */
class Logement {
	private $id, $lat, $lng;
	
	public function __construct($id, $lat, $lng) {
		$this->id = $id;
		$this->lat = $lat;
		$this->lng = $lng;
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
}

?>