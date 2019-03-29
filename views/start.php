<?PHP
include "../entities/client.php";
include "../core/clientC.php";
$client=new Client(75757575,'BEN Ahmed','Salah','salah.benahmed@esprit.tn','ariana',20);
$clientC=new ClientC();
$clientC->afficherClient($client);
echo "****************";
echo "<br>";
echo "id:".$client->getId();
echo "<br>";
echo "nom:".$client->getNom();
echo "<br>";
echo "prenom:".$client->getPrenom();
echo "<br>";
echo "email:".$client->getEmail();
echo "<br>";
echo "numero:".$client->getENumero();
echo "<br>";
echo "adresse:".$client->getAdresse();
echo "<br>";
echo "le nombre d'achat est : ";
$clientC->calculerNb_achat($client); 
echo "<br>";


?>