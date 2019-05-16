<?PHP
include "../../../../entities/livreurr.php";
include "../../../../core/livreurC.php";

if (isset($_POST['id_livr']) and isset($_POST['nom_livr']) and isset($_POST['prenom_livr']) and  isset($_POST['nb_livr']) and  isset($_POST['email'])){
$livreur1=new livreur($_POST['id_livr'],$_POST['nom_livr'],$_POST['prenom_livr'],$_POST['nb_livr'] ,$_POST['email']);
//Partie2
/*
var_dump($employe1);
}
*/

//Partie3
$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: livreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>