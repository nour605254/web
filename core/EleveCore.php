<?PHP

class EleveCore {
function afficherEleve ($eleve){
        echo "Id: ".$eleve->getId()."<br>";
        echo "Nom: ".$eleve->getNom()."<br>";
    }
    
    function ajouterEleve($eleve){

        $sql="insert into eleve (id,nom) values (:id,:nom)";
        $bdd = config::getConnexion();
        try{
        $req=$bdd->prepare($sql);
        
        $id=$eleve->getId();
        $nom=$eleve->getNom();
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherEleves(){
        $sql="SElECT * From eleve";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimerEleve($id){
        $sql="DELETE FROM eleve where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierEleve($eleve,$id){
        $sql="UPDATE eleve SET id=:idd, nom=:nom WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $idd=$eleve->getId();
        $nom=$eleve->getNom();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recuperereleve($id){
        $sql="SELECT * from eleve where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

        function rechercherListeEleves($adress){
        $sql="SELECT * from eleve where nom=$nom";
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