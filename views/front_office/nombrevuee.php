<?php  
include "../../entities/pube.php";
include "../../core/pubC.php";
include "../../entities/jaime.php";
include "../../core/jaimeC.php";
if (isset($_POST['like'])){
	$pub1C=new pubC();
	$jaime=new jaimeC();
	$jaimee=new jaime(0,$_GET['id'],1);
$pub1C->nbvu($_GET['id']);
$jaime->ajouter($jaimee);

header('Location: index.php');
}

else echo "non valide";

?>