<?PHP
include "../Entities/eleve.php";
include '../config.php';
include "../Core/EleveCore.php";

if (isset($_POST['nom']) ){
$eleve1=new eleve($_POST['id'],$_POST['nom']);
//var_dump($eleve);
$eleve1Controller=new EleveCore();
$eleve1Controller->ajouterEleve($eleve1);
header('Location: afficherEleve.php');
	
}
else{
	echo "vérifier les champs";
}
?>


	
	