<?PHP
class livraison{
	private $id_liv;
	private $adresse_liv;
	private $region_liv;
	private $date_liv;

	function __construct($id_liv,$adresse_liv,$region_liv,$date_liv){
		$this->id_liv=$id_liv;
		$this->adresse_liv=$adresse_liv;
		$this->region_liv=$region_liv;
		$this->date_liv=$date_liv;
	
	}
	
	function getid_liv(){
		return $this->id_liv;
	}
	function getadresse_liv(){
		return $this->adresse_liv;
	}
	function getregion_liv(){
		return $this->region_liv;
	}
	
	function getdate_liv(){
		return $this->date_liv;
	}

	function setadresse_liv($adresse_liv){
		$this->adresse_liv=$adresse_liv;
	}
	function setregion_liv($region_liv){
		$this->region_liv;
	}
	
	function setdate_liv($date_liv){
		$this->date_liv;
	}
	
}

?>