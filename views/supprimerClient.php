<?PHP
include "../core/employeC.php";
$employeC=new EmployeC();
if (isset($_POST["cin"])){
	$employeC->supprimerEmploye($_POST["cin"]);
	header('Location: http://localhost/nour/views/afficherEmploye.php');
}

?>