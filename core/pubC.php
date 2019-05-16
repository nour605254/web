<?PHP
require_once "config.php";
class pubC {
function afficherPub ($pub){
		echo "id_pub: ".$pub->getid()."<br>";
		echo "titre_pub: ".$pub->gettitre()."<br>";
		echo "image: ".$pub->getimage()."<br>";
		echo "date_d_pub: ".$pub->getdated()."<br>";
		echo "date_f_pub: ".$pub->getdatef()."<br>";
		echo "desc_pub: ".$pub->getdesc()."<br>";
	}
	
	
	
	function afficherPubs(){
		//$sql="SElECT * From pub p inner join formationphp.pub a on p.id_pub= a.id_pub";
		$sql="SElECT * From pub";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $p){
            die('Erreur: '.$p->getMessage());
        }	
	}
	function ajouterPub($pub){
		$sql="insert into pub (titre_pub,image,date_d_pub,date_f_pub,nb,desc_pub) values ( :titre_pub,:image,:date_d_pub,:date_f_pub,:nb,:desc_pub)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $titre_pub=$pub->gettitre();
        $image=$pub->getimage();
        $date_d_pub=$pub->getdated();
        $date_f_pub=$pub->getdatef();
        $desc_pub=$pub->getdesc();
		
		$req->bindValue(':titre_pub',$titre_pub);
		$req->bindValue(':image',$image);
		$req->bindValue(':date_d_pub',$date_d_pub);
		$req->bindValue(':date_f_pub',$date_f_pub);
		$req->bindValue(':nb',0);
		$req->bindValue(':desc_pub',$desc_pub);
		
            $req->execute();
           
        }
        catch (Exception $p){
            echo 'Erreur: '.$p->getMessage();
        }
		
	}
	function ajouter($jaime){
		$sql="insert into jaime (id_pub,id_client) values ( :id_pub,:id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $id_pub=$jaime->getid_pub();
        $id_client=$jaime->getid_client();
        
		
		$req->bindValue(':id_pub',$id_pub);
		$req->bindValue(':id_client',$id_client);
		
		
            $req->execute();
           
        }
        catch (Exception $p){
            echo 'Erreur: '.$p->getMessage();
        }
		
	}
	function supprimerPub($id_pub){
		$sql="DELETE FROM pub where id_pub= :id_pub";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_pub',$id_pub);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $p){
            die('Erreur: '.$p->getMessage());
        }
	}
	function nbvu($id_pub){
		$sql="UPDATE pub SET  nb = nb+1 WHERE id_pub=:id_pub";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
  
		
		$req->bindValue(':id_pub',$id_pub);
		
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $p){
            echo " Erreur ! ".$p->getMessage();
   echo " Les datas : " ;

        }
	}
	function trier()
	{
		$sql = "SELECT * from pub ORDER BY titre_pub ASC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function nbdi($id_pub){
		$sql="UPDATE pub SET  nb = nb-1 WHERE id_pub=:id_pub";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
  
		
		$req->bindValue(':id_pub',$id_pub);
		
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $p){
            echo " Erreur ! ".$p->getMessage();
   echo " Les datas : " ;

        }
	}


	function modifierPub($pub,$id_pub){
		$sql="UPDATE pub SET  titre_pub=:titre_pub,image=:image,date_d_pub=:date_d_pub,date_f_pub=:date_f_pub,desc_pub=:desc_pub WHERE id_pub=:id_pub";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
        $titre_pub=$pub->gettitre();
        $image=$pub->getimage();
        $date_d_pub=$pub->getdated();
        $date_f_pub=$pub->getdatef();
        $desc_pub=$pub->getdesc();
		$datas = array( ':id_pub'=>$id_pub, ':titre_pub'=>$titre_pub, ':image'=>$image,':date_d_pub'=>$date_d_pub,':date_f_pub'=>$date_f_pub,':desc_pub'=>$desc_pub);
		
		$req->bindValue(':id_pub',$id_pub);
		$req->bindValue(':titre_pub',$titre_pub);
		$req->bindValue(':image',$image);
		$req->bindValue(':date_d_pub',$date_d_pub);
		$req->bindValue(':date_f_pub',$date_f_pub);
		$req->bindValue(':desc_pub',$desc_pub);
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $p){
            echo " Erreur ! ".$p->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	function recupererPub($id_pub){
		$sql="SELECT * from pub where id_pub=$id_pub";
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