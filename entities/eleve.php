<?PHP
class Eleve{
	private $id;
	private $nom;
	function __construct($id,$nom){
		$this->id=$id;
		$this->nom=$nom;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}




	function setNom($nom){
		$this->nom=$nom;
	}

}
?>