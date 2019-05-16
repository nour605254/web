<?php  

	include "../../../../entities/livreurr.php";
include "../../../../core/livreurC.php";

require 'php-mailer-master/PHPMailerAutoload.php';
$user=$_POST["email"];
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ifikeun2017@gmail.com';                 // SMTP username
$mail->Password = 'azertyazertyazerty';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('OurghemiOptique@esprit.tn', 'OurghemiOptique');
$mail->addAddress($user, 'USER');     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Livraison';
$mail->Body    ="vous avez une livraison   " ;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}	
  

header('Location: livreur.php');
	
	 

 ?>