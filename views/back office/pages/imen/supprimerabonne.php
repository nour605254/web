<?PHP
include "../../../../core/abonneC.php";
$abonneC=new abonneC();
if (isset($_POST["id_abonne"])){
	$abonneC->supprimerabonne($_POST["id_abonne"]);
	header('Location: abonne.php');
}

?>