<?PHP
include "../../../core/imen/abonneC.php";
$abonneC=new abonneC();
if (isset($_POST["mail"])){
	$abonneC->supprimerabonne($_POST["mail"]);
	header('Location: news.html');
}

?>