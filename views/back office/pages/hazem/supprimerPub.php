<?PHP
include "../../../../core/pubC.php";
$pubC=new pubC();
if (isset($_POST["id_pub"])){
  $pubC->supprimerPub($_POST["id_pub"]);
  header('Location: pub.php');
}

?>