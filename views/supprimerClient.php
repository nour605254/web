<?PHP
include '../config.php';
include "../Core/ClientCore.php";
$clientController=new ClientCore();
if (isset($_POST["id"])){
	$clientController->supprimerClient($_POST["id"]);
	header('Location: afficherClient.php');
}

?>