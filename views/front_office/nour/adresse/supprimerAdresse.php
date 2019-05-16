<?PHP
include '../../../../core/config.php';
include "../../../../core/nour/adresse/AdresseCore.php";
$adresseController=new AdresseCore();
if (isset($_POST["classement"])){
	$adresseController->supprimerAdresse($_POST["classement"]);
	header('Location: afficherAdresse.php');
}

?>