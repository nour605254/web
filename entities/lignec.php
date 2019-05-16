<?PHP
class lignec{
	private $numC;
	private $id_produit;
	private $quantite;
	private $image;
	function __construct($numC,$id_produit,$quantite,$image){
		
		$this->numC=$numC;
		$this->id_produit=$id_produit;
		$this->quantite=$quantite;
		$this->image=$image;
	}

	

	function getnumC(){
		return $this->numC;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getquantite(){
		return $this->quantite;
	}
function getimage(){
		return $this->image;
	}
	function setnumC($numC){
		$this->numC=$numC;
	}
	function setid_produit($id_produit){
		$this->id_produit;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setimage($image){
		$this->image=$image;
	}
	
}

?>