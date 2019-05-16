
<?PHP
include "config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "id_livr: ".$livreur->getid_livr()."<br>";
		echo "nom_livr: ".$livreur->getnom_livr()."<br>";
		echo "prenom_livr: ".$livreur->getprenom_livr()."<br>";
		echo " nb_livr: ".$livreur->getnb_livr()."<br>";
		echo " email: ".$livreur->getemail()."<br>";
	}
	
	function ajouterlivreur($livreur){
		$sql="insert into livreur (id_livr,nom_livr,prenom_livr,nb_livr,email) values (:id_livr,:nom_livr,:prenom_livr,:nb_livr,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livr=$livreur->getid_livr();
        $nom_livr=$livreur->getnom_livr();
        $prenom_livr=$livreur->getprenom_livr();
         $nb_livr=$livreur->getnb_livr();
         $email=$livreur->getemail();
		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':nom_livr',$nom_livr);
		$req->bindValue(':prenom_livr',$prenom_livr);
		$req->bindValue(':nb_livr',$nb_livr);
		$req->bindValue(':email',$email);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		
		$sql="SELECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($id_livr){
		$sql="DELETE FROM livreur where id_livr= :id_livr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livr',$id_livr);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
/*	function modifierlivreur($livreur,$id_livr){
		$sql="UPDATE livreur SET  nom_livr=:nom_livr,prenom_livr=:prenom_livr,nb_livr=:nb_livr where id_livr:=id_livr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom_livr=$livreur->getnom_livr();
        $prenom_livr=$livreur->getprenom_livr();
        $id_livr=$livreur->getid_livr();
        $nb_livr=$livreur->getnb_livr();
        
		$datas = array( ':id_livr'=>$id_livr, ':nom_livr'=>$nom_livr, ':prenom_livr'=>$prenom_livr, ':nb_livr'=>$nb_livr);
		
		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':nom_livr',$nom_livr);
		$req->bindValue(':prenom_livr',$prenom_livr);
		
		$req->bindValue(':nb_livr',$nb_livr);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
       // header('Location: pub.php');
		
	}*/
	/*function modifierlivreur($livreur,$id_livr)
	{
$sql="UPDATE livreur SET  nom_livr=:nom_livr,prenom_livr=:prenom_livr,nb_livr=:nb_livr where id_livr:=id_livr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		 
          $nom_livr=$livreur->getnom_livr();
        $prenom_livr=$livreur->getprenom_livr();
      
        $nb_livr=$livreur->getnb_livr();
        
		$datas = array( ':id_livr'=>$id_livr, ':nom_livr'=>$nom_livr,':prenom_livr'=>$prenom_livr,':nb_livr'=>$nb_livr);
		
		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':nom_livr',$nom_livr);
		$req->bindValue(':prenom_livr',$prenom_livr);
		
		$req->bindValue(':nb_livr',$nb_livr);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
       


	}*/


function modifierlivreur($livreur,$id_livr){
		$sql="UPDATE livreur SET id_livr=:id_livrr, nom_livr=:nom_livr,prenom_livr=:prenom_livr,nb_livr=:nb_livr,email=:email WHERE id_livr=:id_livrr";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id_livrr=$livreur->getid_livr();
        $nom_livr=$livreur->getnom_livr();
        $prenom_livr=$livreur->getprenom_livr();
        $nb_livr=$livreur->getnb_livr();
        $email=$livreur->getemail();
       
		$datas = array(':id_livrr'=>$id_livrr, ':id_livr'=>$id_livr, ':nom_livr'=>$nom_livr,':prenom_livr'=>$prenom_livr,':nb_livr'=>$nb_livr,':email'=>$email);
		$req->bindValue(':id_livrr',$id_livrr);
		$req->bindValue(':id_livr',$id_livr);
		$req->bindValue(':nom_livr',$nom_livr);
		$req->bindValue(':prenom_livr',$prenom_livr);
		$req->bindValue(':nb_livr',$nb_livr);
		$req->bindValue(':email',$email);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        }

	function recupererlivreur($id_livr)
	{
		$sql="SELECT * from livreur where id_livr=$id_livr";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	


	function affecterlivr($id_livr)
	{
		$sql="UPDATE livreur SET nb_livr=nb_livr+1 WHERE id_livr=$id_livr";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}



function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from livreur where id_livr like '%$search_value%' or nom_livr like '%$search_value%' or prenom_livr like '%$search_value%' or nb_livr like '%$search_value%' ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livreur= $req->fetchALL(PDO::FETCH_OBJ);
        return $livreur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
	}

?>