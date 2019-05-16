<?php
include "../../../../Entities/livraisons.php";
include "../../../../core/livraisonC.php";

if (isset($_POST['modifier']) ){
    $pub1C=new livraisonC();
    $pub= new livraison($_POST['id_liv'],$_POST['adresse_liv'],$_POST['region_liv'],$_POST['date_liv']);
    $pub1C->modifierlivraison($pub,$_POST['id_liv']);
       header('Location: livraison.php');
}
else echo "non valide";
