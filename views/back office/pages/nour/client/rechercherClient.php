<?PHP
include "C:/wamp64/www/git/web/core/nour/client/ClientCore.php";
$clientController=new ClientCore();
if(isset($GET['recherche']) AND !empty($GET['recherche'])){
	$clientController->rechercherClient($_POST["id"]);
	$q= htmlspecialchars($_GET['recherche']);
	header('Location: ../authentification/page_membre.php');
}

?>



