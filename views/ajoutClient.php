<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if ((isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['numero']) and isset($_POST['adresse']) and isset($_POST['nb_achat'])){
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['adresse'],$_POST['nb_achat']);

var_dump($client1);
}

$client1C=new ClientC();
$client1C->ajouterClient($client1);
header('Location: http://localhost/nour/views/afficherClient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>