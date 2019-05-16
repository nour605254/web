<?PHP

class likeC {
	function ajouterlike($like){
		$sql="insert into likeblog (numBlog,user_id) values (:numBlog, :user_id)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $numBlog=$like->getnumBlog();
        $user_id=$like->getuser_id();
        
		$req->bindValue(':numBlog',$numBlog);
		$req->bindValue(':user_id',$user_id);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerlike($like,$user_id){
		$numBlog=$like->getnumBlog();
		$sql="DELETE FROM likeblog where numBlog= :numBlog and user_id=$user_id";
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
	function recupererlike($numBlog,$user_id){
		$sql="SELECT * from likeblog where numBlog=$numBlog and  user_id=$user_id";
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