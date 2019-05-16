<?PHP

class mailC {
function affichermail ($mail){
		echo "adresse_mail: ".$mail->getadresse()."<br>";
		
	}
	
	
	
	function affichermails(){
		//$sql="SElECT * From pub p inner join formationphp.pub a on p.id_pub= a.id_pub";
		$sql="SElECT * From abonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $p){
            die('Erreur: '.$p->getMessage());
        }	
	}
	
	
	}

?>