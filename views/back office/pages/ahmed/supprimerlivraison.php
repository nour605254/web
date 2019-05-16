<?PHP
include "../../../../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id_liv"])){
	$livraisonC->supprimerlivraison($_POST["id_liv"]);
	header('Location: afficherlivraison.php');
}

?>