<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  ?>

<?php
 
// On récupère nos variables de session
if (isset($_SESSION['e']) && isset($_SESSION['p'])) 
{ 

	 echo 'Votre nom est <b>'.$_SESSION['n'].'</b> <br>et votre prenom est <b>'.$_SESSION['pr'].
	'</b><br>Votre adresse est : '.$_SESSION['a'].' <br/> Identifiant de la session est :'.session_id().'</br>'; 
	echo '<a href="se_connecter.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="se_connecter.php">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>