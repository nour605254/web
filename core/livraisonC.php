
<?PHP
require_once "config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "id_liv: ".$livraison->getid_liv()."<br>";
		echo "adresse_liv: ".$livraison->getadresse_liv()."<br>";
		echo "region_liv: ".$livraison->getregion_liv()."<br>";
		echo " date_liv: ".$livraison->getdate_liv()."<br>";
		
	}
	
	function ajouterlivraison($livraison){
		$sql="insert into livraison (id_liv,adresse_liv,region_liv,date_liv) values (:id_liv, :adresse_liv,:region_liv,:date_liv)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_liv=$livraison->getid_liv();
        $adresse_liv=$livraison->getadresse_liv();
        $region_liv=$livraison->getregion_liv();
        $date_liv=$livraison->getdate_liv();
        
		$req->bindValue(':id_liv',$id_liv);
		$req->bindValue(':adresse_liv',$adresse_liv);
		$req->bindValue(':region_liv',$region_liv);
		$req->bindValue(':date_liv',$date_liv);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($id_liv){
		$sql="DELETE FROM livraison where id_liv= :id_liv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_liv',$id_liv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id_liv){
		$sql="UPDATE livraison SET  adresse_liv=:adresse_liv,region_liv=:region_liv,date_liv=:date_liv where id_liv=:id_liv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $adresse_liv=$livraison->getadresse_liv();
        $region_liv=$livraison->getregion_liv();
        $date_liv=$livraison->getdate_liv();
        
		$datas = array( ':id_liv'=>$id_liv, ':adresse_liv'=>$adresse_liv,':region_liv'=>$region_liv,':date_liv'=>$date_liv);
		
		$req->bindValue(':id_liv',$id_liv);
		$req->bindValue(':adresse_liv',$adresse_liv);
		$req->bindValue(':region_liv',$region_liv);
		$req->bindValue(':date_liv',$date_liv);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
       
		
	}
	function recupererlivraison($id_liv){
		$sql="SELECT * from livraison where id_liv=$id_liv";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
function triec(){
		$sql="SELECT * from livraison order by id_liv asc ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tried(){
		$sql="SELECT * from livraison order by id_liv DESC ";
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