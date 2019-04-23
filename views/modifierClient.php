<HTML>
<head>
</head>
<body>
<?php
include "../Entities/client.php";
include "../Core/ClientCore.php";

if (isset($_GET['id'])){
	$clientController=new ClientCore();
    $result=$clientController->recupererClient($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
		$pwd=$row['pwd'];
		$adresse=$row['adresse'];
		$numero=$row['numero'];
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="pwd" value="<?PHP echo $pwd ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?php
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']);
	$clientController->modifierClient($client,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherClient.php');
}
?>
</body>
</HTMl>