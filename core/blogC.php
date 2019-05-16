<?PHP
include_once "config.php";

class blogC {
	function afficherblog(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From blogs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}
	}	
	function afficherblogcarrera(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From blogs where marque='carrera'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}
	}
	function afficherblogretro()
	{
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From blogs where marque='retro eyewear'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}

	}
	function afficherblograyban()
	{
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.numC= a.numC";
		$sql="SElECT * From blogs where marque='ray ban'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}

	}
function supprimerblog($numBlog){
		$sql="DELETE FROM blogs where numBlog= :numBlog";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numBlog',$numBlog);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierblog($blog,$numBlog){
		$sql="UPDATE blogs SET  titreBlog=:titreBlog,description=:description,imageBlog=:imageBlog,marque=:marque WHERE numBlog=:numBlog";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $titreBlog=$blog->gettitreBlog();
        $description=$blog->getdescription();
        $imageBlog=$blog->getimageBlog();
        $marque=$blog->getmarque();
		$datas = array(':numBlog'=>$numBlog,':titreBlog'=>$titreBlog,':description'=>$description,':imageBlog'=>$imageBlog,':marque'=>$marque);
		$req->bindValue(':numBlog',$numBlog);
		$req->bindValue(':titreBlog',$titreBlog);
		$req->bindValue(':description',$description);
		$req->bindValue(':imageBlog',$imageBlog);
		$req->bindValue(':marque',$marque);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function nombrelike($numBlog){
		$sql="UPDATE blogs SET  nb = nb+1 WHERE numBlog=:numBlog";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        
		$req->bindValue(':numBlog',$numBlog);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }	
		
	}
	function supprimerlike($numBlog){
		$sql="UPDATE blogs SET  nb = nb-1 WHERE numBlog=:numBlog";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        
		$req->bindValue(':numBlog',$numBlog);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }	
		
	}
	function recupererblog($numBlog){
		$sql="SELECT * from blogs where numBlog=$numBlog";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*

*/


	function ajouterblog($blog){
		$sql="insert into blogs (titreBlog,description,imageBlog,nb,marque) values ( :titreBlog,:description,:imageBlog,:nb,:marque)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $titreBlog=$blog->gettitreBlog();
        $description=$blog->getdescription();
        $imageBlog=$blog->getimageBlog();
		$marque=$blog->getmarque();
		$req->bindValue(':titreBlog',$titreBlog);
		$req->bindValue(':description',$description);
		$req->bindValue(':imageBlog',$imageBlog);
		$req->bindValue(':nb',0);

		$req->bindValue(':marque',$marque);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
}
?>