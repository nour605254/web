<?PHP
class mail{
	private $adresse_mail;
	
	function __construct($adresse_mail){
		$this->adresse_mail=$adresse_mail;
		
	}
	
	function getadresse(){
		return $adresse_mail->adresse_mail;
	}
	

?>