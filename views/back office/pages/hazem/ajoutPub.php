<?PHP
include "../../../../entities/pube.php";
include "../../../../core/pubC.php";
$dated=$_POST['date_d_pub'];
$datef=$_POST['date_f_pub'];
$titre=$_POST['titre_pub'];
$desc=$_POST['desc_pub'];

if ( isset($_POST['titre_pub']) and isset($_POST['image']) and isset($_POST['date_d_pub']) and isset($_POST['date_f_pub']) and isset($_POST['desc_pub'])and ($dated < $datef) and (strlen($titre)<10) and (strlen($desc)<50))
{
$pub1=new pub(0,$_POST['titre_pub'],$_POST['image'],$_POST['date_d_pub'],$_POST['date_f_pub'],$_POST['desc_pub']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$pub1C=new pubC();
$pub1C->ajouterPub($pub1);
header('Location: pub.php');
	
}else{
	header('Location: pub.php');
}
//*/

?> 