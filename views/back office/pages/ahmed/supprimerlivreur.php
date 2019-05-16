<?PHP
include "../../../../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["id_livr"])){
	$livreurC->supprimerlivreur($_POST["id_livr"]);
	header('Location: afficherlivreur.php');
}

?>