<!DOCTYPE html>
<?PHP
include '../config.php';
include "../Core/EleveCore.php";
$eleve1=new EleveCore();
$listeEleves=$eleve1->afficherEleves();

//var_dump($listeeleves->fetchAll());
?>
<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
  <body>
    <div class="container">
      <div class="row">
    <table class="table" border="1">

  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>

<?PHP
foreach($listeEleves as $row){
	?>

	<tbody>
	<tr>
		
	<th scope="row"><?PHP echo $row['id']; ?></th>
	<th><?PHP echo $row['nom']; ?></th>
	<th><form method="POST" action="supprimerEleve.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</th>
	<th><a href="modifierEleve.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></th>
	</tr>

  </tbody>
	<?PHP
}
?>
</table>


