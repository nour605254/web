<?PHP
include "../../../../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["id_livr"])){

	$livreurC->affecterlivr($_POST["id_livr"]);
	header('Location: afficherlivreur.php');

}
if ($livreurC->affecterlivr($_POST["id_livr"]))
{



include "Nexmo/src/NexmoMessage.php" ;


	

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('1056a1e0','ZHpar1WmeOHySpFY');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21652727242', 'ouerghemi_optic', ' une livraison a ete affecter merci de consulter votre backoffice ' );

	// Step 3: Display an overview of the message
	}

	// Done!  
?>