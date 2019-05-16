<?PHP
include "../../../../entities/livraisons.php";
include "../../../../core/livraisonC.php";

if (isset($_POST['id_liv']) and isset($_POST['adresse_liv']) and isset($_POST['region_liv']) and  isset($_POST['date_liv'])){
$livraison1=new livraison($_POST['id_liv'],$_POST['adresse_liv'],$_POST['region_liv'],$_POST['date_liv']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: livraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>