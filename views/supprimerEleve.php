<?PHP
include '../config.php';
include "../Core/EleveCore.php";
$eleveController=new EleveCore();
if (isset($_POST["id"])){
	$eleveController->supprimerEleve($_POST["id"]);
	header('Location: afficherEleve.php');
}

?>