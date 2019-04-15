<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include "C:/wamp64/www/git/web/config.php";

	$requete=$bdd->prepare('INSERT INTO admin (nom, prenom, email, pwd, adresse,numero) VALUES (?,?,?,?,?,?)');
	$requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']));
//$var= echo '<h1> '. $name= $_POST['prenom'].' '. $name= $_POST['nom'].' </h1><br/>';
header('location: client2.php');



//echo '<h1> Bienvenue '. $name= $_POST["nom"].'! </h1><br/>'; 


?>
</body>
</html>



