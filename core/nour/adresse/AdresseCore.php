<?PHP
include_once "C:/wamp64/www/tryyyy/core/config.php";

class AdresseCore {
function afficherAdresse ($adresse){
        echo "Classement: ".$adresse->getClassement()."<br>";
        echo "Ad: ".$adresse->getAd()."<br>";
        echo "Nomr: ".$adresse->getNomr()."<br>";
         echo "Numr ".$adresse->getNumr()."<br>";
    }

      
    
    function ajouterAdresse($adresse){

        $sql="INSERT INTO adresse (classement,ad,nomr,numr) VALUES (:classement,:ad,:nomr,:numr)";
        $bdd = config::getConnexion();
        try{
        $req=$bdd->prepare($sql);
        
        $classement=$adresse->getClassement();
        $ad=$adresse->getAd();
        $nomr=$adresse->getNomr();
        $numr=$adresse->getNumr();
        $req->bindValue(':classement',$classement);
        $req->bindValue(':ad',$ad);
        $req->bindValue(':nomr',$nomr);
        $req->bindValue(':numr',$numr);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherAdresses(){
        $sql="SElECT * From adresse";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimerAdresse($classement){
        $sql="DELETE FROM adresse where classement= :classement";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':classement',$classement);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierAdresse($adresse,$classement){
        $sql="UPDATE adresse SET classement=:classementt, ad=:ad,nomr=:nomr,numr=:numr WHERE classement=:classementt";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $classementt=$adresse->getClassement();
        $ad=$adresse->getAd();
        $nomr=$adresse->getNomr();
        $numr=$adresse->getNumr();
        $datas = array(':classementt'=>$classementt, ':classement'=>$classement, ':ad'=>$ad,':nomr'=>$nomr, ':numr'=>$numr);
        $req->bindValue(':classementt',$classementt);
        $req->bindValue(':classement',$classement);
        $req->bindValue(':ad',$ad);
        $req->bindValue(':nomr',$nomr);
        $req->bindValue(':numr',$numr);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererAdresse($classement){
        $sql="SELECT * from adresse WHERE classement=$classement";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


       

 function rechercherAdresse($classement){
        //$sql="SELECT * from client ORDER BY id DESC";
        $sql="SELECT * from adresse where classement LIKE "%'.$q.'%" ORDER BY classement DESC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




        function rechercherListeAdresses($ad){
        $sql="SELECT * from adresse where ad=$ad";
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