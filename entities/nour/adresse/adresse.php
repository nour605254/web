<?PHP
class adresse{
	private $classement;
	private $ad;
	private $nomr;
	private $numr;
	function __construct($classement,$ad,$nomr,$numr){
		$this->classement=$classement;
		$this->ad=$ad;
		$this->nomr=$nomr;
		$this->numr=$numr;
	}
	
	function getClassement(){
		return $this->classement;
	}
	function getAd(){
		return $this->ad;
	}
	function getNomr(){
		return $this->nomr;
	}
	function getNumr(){
		return $this->numr;
	}



	function setAd($ad){
		$this->adresse=$adresse;
	}
	function setNomr($nomr){
		$this->nomr=$nomr;
	}
	function setNumr($numr){
		$this->numr=$numr;
	}
	
}



?>