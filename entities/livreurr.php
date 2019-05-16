<?PHP
class livreur{
	private $id_livr;
	private $nom_livr;
	private $prenom_livr;
  private $nb_livr;
  private $email;
	function __construct($id_livr,$nom_livr,$prenom_livr,$nb_livr,$email){
		$this->id_livr=$id_livr;
		$this->nom_livr=$nom_livr;
		$this->prenom_livr=$prenom_livr;
		
	$this->nb_livr=$nb_livr;
			$this->email=$email;
	
	}
	
	function getid_livr(){
		return $this->id_livr;
	}
	function getnom_livr(){
		return $this->nom_livr;
	}
	function getprenom_livr(){
		return $this->prenom_livr;
	}
	
	
	function getnb_livr(){
		return $this->nb_livr;
	}
	function getemail(){
		return $this->email;
	}


function setid_livr($id_livr){
		$this->id_livr=$id_livr;
	}
	function setnom_livr($nom_livr){
		$this->nom_livr=$nom_livr;
	}
	function setprenom_livr($prenom_livr){
		$this->prenom_livr;
	}
	
	function setnb_livr($nb_livr){
		$this->nb_livr;
	}

function setemail($email){
		$this->email;
	}

	
	
}

?>