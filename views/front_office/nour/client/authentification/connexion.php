<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'Client.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$client=new Client($_POST['email'],$_POST['pwd'],$conn);
$u=$client->Logedin($conn,$_POST['email'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['email']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['email']==$_POST['email'] && $t['pwd']==$_POST['pwd']){
		
		session_start();
		$_SESSION['e']=$_POST['email'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['id']=$t['id'];
		$_SESSION['n']=$t['nom'];
		$_SESSION['pr']=$t['prenom'];
		$_SESSION['a']=$t['adresse'];
		$_SESSION['num']=$t['numero'];
		header("location: http://localhost/tryyyy/views/front_office/profil.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=http://localhost/tryyyy/views/front_office/nour/client/authentification/se_connecter.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="http://localhost/tryyyy/views/front_office/nour/client/authentification/se_connecter.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>