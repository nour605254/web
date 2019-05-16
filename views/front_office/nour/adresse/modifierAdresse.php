



        <!-- ****** Header Area End ****** -->

 <section class="top-discount-area d-md-flex align-items-center">

<?PHP
include "../../../../entities/nour/adresse/adresse.php";
include '../../../../core/config.php';
include "../../../../core/nour/adresse/AdresseCore.php";

if (isset($_GET['classement'])){
	$adresseController=new AdresseCore();
    $result=$adresseController->recupererAdresse($_GET['classement']);
	foreach($result as $row){
		$classement=$row['classement'];
		$ad=$row['ad'];
		$nomr=$row['nomr'];
		$numr=$row['numr'];
?>


 <section style="margin-left: 8em;">
<form  method="POST">

<div class="container">
      <div class="row"> 

      	<center>
<caption>Ajouter adresse</caption>
<table style="width: 70em" class="table">
	 <thead class="thead-dark">
<tr>
	<th scope="row">Classement</th>
<td><input type="number" name="classement" value="<?PHP echo $classement ?>" required placeholder=""></td>
</tr>
<tr>
	<th scope="row">adresse</th>
<td><input type="text" name="ad" value="<?PHP echo $ad ?>" required placeholder=""></td>
</tr>
<tr>

	<th scope="row">Nom du récepteur</th>
<td> <input type="text" name="nomr" value="<?PHP echo $nomr ?>"  required placeholder="" ></td>
</tr>
<tr>
	<th scope="row">Numero du récepteur</th>
<td><input type="number" name="numr" value="<?PHP echo $numr ?>" required placeholder=""></td>
<tr>
<td></td>
<td><input class="btn btn-success" type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="classement_ini" value="<?PHP echo $_GET['classement'];?>"></td>
</tr>
</table>
</form>


  </center>
        </section>




<?PHP
	}
}
if (isset($_POST['modifier'])){
	$adresse=new adresse($_POST['classement'],$_POST['ad'],$_POST['nomr'],$_POST['numr']);
	$adresseController->modifierAdresse($adresse,$_POST['classement_ini']);
	echo $_POST['classement_ini'];
	header('Location: afficherAdresse.php');
}
?>

</section>

<?PHP
include "footer.php";
?>


</body>
</html>