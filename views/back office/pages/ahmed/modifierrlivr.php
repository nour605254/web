<?php
include "../../../../Entities/livreurr.php";
include "../../../../core/livreurC.php";

if (isset($_POST['modifier']) ){
 $pub1C=new livreurC();
   $pub= new livreur($_POST['id_livr'],$_POST['nom_livr'],$_POST['prenom_livr'],$_POST['nb_livr'],$_POST['email']);
 $pub1C->modifierlivreur($pub,$_POST['id_livr']);
 header('Location: livreur.php');
	
}
else echo "non valide";
?>