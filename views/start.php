<?PHP
include "../Entities/eleve.php";
include "../Core/EleveCore.php";
$eleve=new Eleve(757,'AHMED');
$eleveController=new eleveController();
$eleveController->afficherEleve($eleve);
echo "****************";
echo "<br>";
echo "id:".$eleve->getId();
echo "<br>";
echo "nom:".$eleve->getNom();
echo "<br>";


?>