<HTML>
<head>
</head>
<body>
<?PHP
include "../Entities/eleve.php";
include "../Core/EleveCore.php";
include "../config.php";
if (isset($_GET['id'])){
	$eleveController=new EleveCore();
    $result=$eleveController->recupererEleve($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
?>
<form method="POST">
<table>
<caption>Modifier Eleve</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHPecho $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$eleve=new eleve($_POST['id'],$_POST['nom']);
	$eleveController->modifierEleve($eleve,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherEleve.php');
}
?>
</body>
</HTMl>