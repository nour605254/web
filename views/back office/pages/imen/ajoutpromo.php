
<?php
include "../../../../entities/imen/promotion.php";
include "../../../../core/imen/promotionC.php";
include "../../../../asssets/Nexmo/src/NexmoMessage.php" 
new NexmoMessage.
	$nexmo_sms = new NexmoMessage('fe44799b','cn7mXB1QirWOvTvg');
if ($_POST['idee']!=null and $_POST['num']!=null and $_POST['namee']!=null and $_POST['rem']!=null and $_POST['datee']!=null and $_POST['desc']!=null and $_POST['image']!=null) {


	
$promo1=new promotion($_POST['idee'],$_POST['num'],$_POST['namee'],$_POST['rem'],$_POST['datee'],$_POST['desc'],$_POST['image']);
echo $promo1->getIdprod();
$promo1C=new promotionC();
$promo1C->ajouterpromo($promo1);
$clients=$promo1C->recupererclient();
foreach ($clients as $key) {
	var_dump($key['tel']);
	sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21627026614', 'Cazasport', 'le produit a ete bien ajouter au panier ' );
}

//header('Location: promotion1.php');
	
}

?>
