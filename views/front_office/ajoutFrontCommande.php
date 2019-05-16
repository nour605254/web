    <?php 
session_start();
include "../../entities/commande.php";
include "../../core/commandeC.php";
include "../../core/lignecC.php";
include "../../entities/lignec.php";
include "../../core/fonctions-panier.php";

$p=MontantGlobal();  

$e="enCoursLivraison";
$d=date("Y-m-d");
$commande1=new commande($p,$d,$e,$_SESSION['user_id']);
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
$result=$commande1C->affichercommandes();
$c=0;
foreach ($result as $row) {
$c=$row['numC'];
var_dump($c);
}
$ligne1C=new lignecC();
$nbArticles=count($_SESSION['panier']['libelleProduit']);
var_dump($nbArticles);
if ($nbArticles > 0)

                                            {
                                                for ($i=0 ;$i < $nbArticles ; $i++)
                                                { 
                                                $a=$_SESSION['panier']['libelleProduit'][$i];
                                            	$b=$_SESSION['panier']['qteProduit'][$i]; 
                                               $ligne1C->ajoutbase($c,$a,$b);
                                                }
                                                } 


header('Location: afficherProd.php');
	

//*/

?>