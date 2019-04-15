<?PHP
include '../config.php';
include "../Core/ClientCore.php";
$client1=new ClientCore();
$listeClients=$client1->afficherClients();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Prenom</td>
<td>email</td>
<td>pwd</td>
<td>adresse</td>
<td>numero</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeClients as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['pwd']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierClient.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


