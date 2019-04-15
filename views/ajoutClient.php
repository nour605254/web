<?PHP
include "../Entities/client.php";
include '../config.php';
include "../Core/ClientCore.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['pwd']) and isset($_POST['adresse']) and isset($_POST['numero'])){
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']);
//var_dump($client);
$client1Controller=new ClientCore();
$client1Controller->ajouterClient($client1);
header('Location: afficherClient.php');
	
}
else{
	echo "vérifier les champs";
}
?>


	
	
