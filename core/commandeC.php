<?PHP
include "config.php";
class commandeC {
	function ajouterCommande($commande){
	$sql="insert into commandes (totalC,dateCreation,etatC,id_client) values (:totalC,:dateCreation,:etatC,:id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $totalC=$commande->gettotalC();
        $dateCreation=$commande->getdateCreation();
        $etatC=$commande->getetatC();
		$id_client=$commande->getid_client();

		$req->bindValue(':totalC',$totalC);
		$req->bindValue(':dateCreation',$dateCreation);
		$req->bindValue(':etatC',$etatC);
		$req->bindValue(':id_client',$id_client);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
function supprimerCommande($numC){
		$sql="DELETE FROM commandes where numC= :numC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numC',$numC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifiercommande($etatC,$numC){
		$sql="UPDATE commandes SET etatC=:etatC WHERE numC=:numC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);		
		$req->bindValue(':numC',$numC);
		$req->bindValue(':etatC',$etatC);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }
		
	}
	function recuperercommande($numC){
		$sql="SELECT * from commandes where numC=$numC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function afficherhistorique($a)
{
	$sql="	SELECT * FROM commandes where id_client=$a";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}

}

	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From commandes ORDER BY `commandes`.`numC` ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}
	}
	function selectcommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From commandes order by totalC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}
	}

}
	?>