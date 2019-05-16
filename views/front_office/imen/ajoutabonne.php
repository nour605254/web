<?php
include "../../../entities/abonne.php";
include "../../../core/abonneC.php";
if ($_POST['mail']!=null ) {
$abonne1=new abonne($_POST['mail']);
var_dump($_POST['mail']);
$abonne1C=new abonneC();
$recuperer=$abonne1C->recupererabonne();
$i=0;
foreach ($recuperer as $key) {
if($key['adresse_mail']==$_POST['mail'])
{
	$i=1;
}
}
if($i==0)
{
$abonne1C->ajouter_abonne($abonne1);
header('Location: ../promotion.php');
}else{
header('Location: ../promotion.php?erreur=true');
}	
}else{
include"../index.php"
?>
<script> alert("mail envoyer");</script>
<?php


}

?>