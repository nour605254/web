<?PHP
include "../../../../entities/nour/adresse/adresse.php";
include "../../../../core/nour/adresse/AdresseCore.php";
$adresse=new Adresse(757,'Arian','Salah',20555555);
$adresseController=new AdresseController();
$adresseController->afficherAdresse($adresse);
echo "****************";
echo "<br>";
echo "classement:".$adresse->getClassement();
echo "<br>";
echo "ad:".$adresse->getAd();
echo "<br>";
echo "nom du recepteur:".$adresse->getNomr();
echo "<br>";
echo "numero du récepteur:".$adresse->getNumr();
echo "<br>";


?>