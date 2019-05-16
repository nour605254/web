<?PHP
include "../../../../core/promotionC.php";
$promoC=new promotionC();
if (isset($_GET["num_promotion"])){
	$promoC->supprimerpromo($_GET["num_promotion"],$_GET["id_produit"]);
	header('Location: promotion1.php');
}

?>