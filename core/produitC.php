<?PHP
require_once "config.php";
class produitC {
function afficherProduit ($produit){
		echo "id_produit: ".$produit->getIdp()."<br>";
		echo "type_produit: ".$produit->getType()."<br>";
		echo "quantite: ".$produit->getQuantite()."<br>";
		echo "disponibilite: ".$produit->getDispo()."<br>";
		echo "id_categorie: ".$produit->getIdc()."<br>";
		echo "marque: ".$produit->getMarque()."<br>";
		echo "pour :".$produit->getPour()."<br>";
		echo "prix :".$produit->getPrix()."<br>";
		echo "description :".$produit->getDesc()."<br>";
		echo "image :".$produit->getImg()."<br>";
		
	}

	function ajouternote($id_produit,$note)
	{
		$sql="UPDATE produit SET note=:note where id_produit=:idpp";
		$db = config::getConnexion();
			$req=$db->prepare($sql);
		$req->bindValue(':idpp',$id_produit);
		$req->bindValue(':note',$note);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function prixdec(){
		$sql="SElECT * From produit order by prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

		function modifierProduit($produit,$id_produit){
		$sql="UPDATE produit SET type_produit=:type_produit,quantite=:quantite,disponibilite=:disponibilite,id_categorie=:id_categorie, marque=:marque, pour=:pour, prix=:prix, description=:description, image=:image WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
        $idpp=$produit->getIdp();
        $type_produit=$produit->getType();
        $quantite=$produit->getQuantite();
        $disponibilite=$produit->getDispo();
        $id_categorie=$produit->getIdc();
        $marque=$produit->getMarque();
        $pour=$produit->getPour();
        $prix=$produit->getPrix();
        $description=$produit->getDesc();
        $image=$produit->getImg();
		$datas = array(':id_produit'=>$id_produit, ':type_produit'=>$type_produit,':quantite'=>$quantite,':disponibilite'=>$disponibilite,':id_categorie'=>$id_categorie,':marque'=>$marque,':pour'=>$pour,':prix'=>$prix,':description'=>$description,':image'=>$image);

		        $id_produit=$produit->getIdp();
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':type_produit',$type_produit);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':pour',$pour);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function ajouterProduit($produit){
		$sql="insert into produit (type_produit,quantite,disponibilite,id_categorie,marque,pour,prix,description,image
) values (:type_produit, :quantite, :disponibilite, :id_categorie, :marque, :pour, :prix, :description, :image
)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$produit->getIdp();
        $type_produit=$produit->getType();
        $quantite=$produit->getQuantite();
        $disponibilite=$produit->getDispo();
        $id_categorie=$produit->getIdc();
        $marque=$produit->getMarque();
        $pour=$produit->getPour();
        $prix=$produit->getPrix();
        $description=$produit->getDesc();
        $image=$produit->getImg();
		$req->bindValue(':type_produit',$type_produit);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':pour',$pour);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherProduitss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit ORDER BY id_produit DESC LIMIT 3";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

 	function SearchProducts($Find)
        {
         $db=config::getConnection();
		$Rq = "SELECT * FROM produit WHERE id_produit like '%".$Find."%' or description like '%".$Find."%' or id_categorie like '%".$Find."%' or prix like '%".$Find."%' or marque like '%".$Find."%' or type_produit like '%".$Find."%' or quantite like '%".$Find."% or disponibilite like '%".$Find."%' or pour like '%".$Find."%' ";
		$P=$db->query($Rq);
		return $P->fetchAll();
        }


		function afficherProduitsh(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where disponibilite like 'hors stock' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function afficherProduitshh(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where disponibilite like 'en stock' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerProduit($id_produit){
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function selectsolaire(){
		$sql="Select * FROM produit where type_produit like '%solaire%' or type_produit like '%optic%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function selectlentilles(){
		$sql="Select * FROM produit where type_produit like '%lentilles%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
		function selectmontre(){
		$sql="Select * FROM produit where type_produit like '%montre%' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function recupererProduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherche($Find){
        $db = config::getConnexion();
            $sql="select * from produit where type_produit like '%$Find%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $produit= $req->fetchALL(PDO::FETCH_OBJ);
        return $produit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
	
}


?>