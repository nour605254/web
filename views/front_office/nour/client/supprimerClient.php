<?PHP
include "C:/wamp64/www/tryyyy/core/nour/client/ClientCore.php";
$clientController=new ClientCore();
if (isset($_POST["id"])){
	$clientController->supprimerClient($_POST["id"]);
	header('Location: authentification/se_connecter.php');
}

?>