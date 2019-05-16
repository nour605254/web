<?PHP
include "../../../entities/eventt.php";
include "../../../core/eventC.php";
$dated=$_POST['date_d_event'];
$datef=$_POST['date_f_event'];
$titre=$_POST['titre_event'];
$desc=$_POST['desc_event'];
$type=$_POST['type_event'];

if ( isset($_POST['titre_event']) and isset($_POST['image']) and isset($_POST['date_d_event']) and isset($_POST['date_f_event']) and isset($_POST['desc_event']) and isset($_POST['adresse_event']) and isset($_POST['type_event']) and ($dated < $datef) and (strlen($titre)<20) and (strlen($desc)<50) and (strlen($type)<20) )
{
$event1=new event(0,$_POST['titre_event'],$_POST['image'],$_POST['date_d_event'],$_POST['date_f_event'],$_POST['desc_event'],$_POST['adresse_event'],$_POST['type_event']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$event1C=new eventC();
$event1C->ajouterEvent($event1);

header('Location: event.php');
	
}else{
	header('Location: eventttt.php');
}
//*/

?> 