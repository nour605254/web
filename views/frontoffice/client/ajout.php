
<?php

include "C:/wamp64/www/git/web/config.php";

	$requete=$bdd->prepare('INSERT INTO client (nom, prenom, email, pwd, adresse,numero) VALUES (?,?,?,?,?,?)');
	$requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']));
//header('location: http://localhost/git/web/views/front office/client/welcome.php');

?>