<?PHP
include "../../../../entities/nour/adresse/adresse.php";
include '../../../../core/config.php';
include "../../../../core/nour/adresse/AdresseCore.php";

if (isset($_POST['classement']) and isset($_POST['ad']) and isset($_POST['nomr']) and isset($_POST['numr'])){
$adresse1=new adresse($_POST['classement'],$_POST['ad'],$_POST['nomr'],$_POST['numr']);
//var_dump($client);
$adresse1Controller=new AdresseCore();
$adresse1Controller->ajouterAdresse($adresse1);
header('Location: afficherAdresse.php');
	
}
else{
	echo "vérifier les champs";
}
?>


	
	
