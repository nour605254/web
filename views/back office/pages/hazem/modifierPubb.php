<?php
include "../../../../entities/pube.php";
include "../../../../core/pubC.php";
$dated=$_POST['dated'];
$datef=$_POST['datef'];
$titre=$_POST['titre'];
$desc=$_POST['desc'];
if (isset($_POST['modifier']) and ($dated < $datef) and (strlen($titre)<10) and (strlen($desc)<50)){
    $pub1C=new pubC();
    $pub= new pub($_GET['id'],$_POST['titre'],$_POST['image'],$_POST['dated'],$_POST['datef'],$_POST['desc']);
    $pub1C->modifierPub($pub,$_GET['id']);
        header('Location: pub.php');
    
}
if (isset($_POST['modifier']) and ($dated > $datef) ){
    
        header('Location: pub.php');
}
if (isset($_POST['modifier']) and (strlen($titre)>10) ){
    
        header('Location: pub.php');
}
if (isset($_POST['modifier']) and (strlen($desc)>50) ){
    
        header('Location: pub.php');
}