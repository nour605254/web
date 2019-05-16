<?PHP
class lignecC {
    function __construct(){

  }
	function afficherlistec(){
		$sql="SElECT * From lignec";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        	}
	}	
	function ajoutbase($a,$b,$c)
{
   $sql="insert into lignec (numC,nom_produit,quantite) values ( :numC,:id_produit,:quantite)";
      $db = config::getConnexion();
      try{
        $req=$db->prepare($sql);
      $req->bindValue(':numC',$a);
      $req->bindValue(':id_produit',$b);
      $req->bindValue(':quantite',$c);

      
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
      

}

function recupererligne($numC){
    $sql="SELECT * from lignec where numC=$numC";
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