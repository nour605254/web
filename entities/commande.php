<?PHP
class commande{
	
	private $totalC;
	private $dateCreation;
	private $etatC;
	private $id_client;
	function __construct($totalC,$dateCreation,$etatC,$id_client){
		
		$this->totalC=$totalC;
		$this->dateCreation=$dateCreation;
		$this->etatC=$etatC;
		$this->id_client=$id_client;
	}
	
	
	function getTotalC(){
		return $this->totalC;
	}
	function getdateCreation(){
		return $this->dateCreation;
	}
	function getEtatC(){
		return $this->etatC;
	}

	function getid_client(){
		return $this->id_client;
	}

	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setTotalC($totalC){
		$this->totalC=$totalC;
	}
	function setdateCreation($dateCreation){
		$this->dateCreation;
	}
	function setEtatC($etatC){
		$this->etatC=$etatC;
	}
	
}

?>