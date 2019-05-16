<HTML>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ouerghemmi Optic - Opticienne Optométriste | Login</title>

    <!-- Favicon  -->
    <link rel="icon" href="../../img/core-img/favicon.ico">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../../css/core-style.css">
    <link rel="stylesheet" href="../../style.css">

    <!-- Responsive CSS -->
    <link href="../../css/responsive.css" rel="stylesheet">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?PHP
include "C:/wamp64/www/tryyyy/entities/nour/client/client.php";
include "C:/wamp64/www/tryyyy/core/nour/client/ClientCore.php";
//include "../../config.php";
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

include("entete.php"); 
?>



<form method="POST">
 <br/> <center>	<h1>Modifier Client</h1></center><br/>
    <div class="container">
      <div class="row">
    <table class="table" border="1">

  <thead class="thead-dark">
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
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouteradresse" value="ajouter adresse"></td>
</tr>
  </thead>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']);
	$clientController->modifierClient($client,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: ../../modifier.php');
}
else if(isset($_POST['ajouteradresse'])){
	header('Location: ../adresse/ajoutAdresse.html');
}
?>
</body>
</HTMl>