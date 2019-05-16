<?php
include "config.php";
class abonneC{ 

	function ajouter_abonne($abonne){
		$sql="INSERT INTO abonnee (adresse_mail,date_a) VALUES ( :adresse_mail, NOW() ) ";



		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $adresse_mail=$abonne->get_adresse();
        
		//$req->bindValue(':date_a',$date);
		$req->bindValue(':adresse_mail',$adresse_mail);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function ajouter_abonne2($abonne)
	{
		$sql="insert into abonnee (adresse_mail,date_a) values (:adresse_mail,:date_a)";


		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$date_a=$abonne->get_date();
        $adresse_mail=$abonne->get_adresse();
        
		$req->bindValue(':date_a',$date_a);
		$req->bindValue(':adresse_mail',$adresse_mail);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherabonne(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From abonnee";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function supprimerabonne($adresse_mail){
		$sql="DELETE FROM abonnee where id_abonne= :adresse_mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':adresse_mail',$adresse_mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function long()
{$sql="SELECT COUNT(*) as total FROM abonnee";
		$db = config::getConnexion();
		try{
		$total=$db->query($sql);
		return $total;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	





	function recupererabonne(){
		$sql="SELECT adresse_mail from abonnee";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeabonne($adresse_mail){
		$string=$adresse_mail;
		var_dump($string);
		$sql='SELECT * from abonnee where adresse_mail='.$string;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeabonne1($adresse_mail){
		$sql="SELECT * from abonnee where adresse_mail= :adresse_mail";
		$db = config::getConnexion();
		try{
			 $req=$db->prepare($sql);
		$req->bindValue(':adresse_mail',$adresse_mail);
		$liste=$req->execute();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



}

?>