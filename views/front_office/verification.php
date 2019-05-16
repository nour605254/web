<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'projet';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT * FROM users where 
              user_name = '".$username."' and user_pass = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete, MYSQLI_BOTH);
        $count = $reponse[0];
        var_dump($reponse["role"]);
                var_dump($reponse[1]);
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           $_SESSION['role'] = $reponse["role"];
             $_SESSION['user_id'] = $reponse["user_id"];

           $_SESSION['user_email'] = $reponse["user_email"];
          if($reponse["role"]=="admin"){
           header('Location: ../back office/index.html');
            }else{
                if(isset($_POST['url']))
                {
                    header('Location:'.$_POST['url']);
                }else
            header('Location: ../front_office/afficherProd.php');
         }
          
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>
Etape 4:
Dernière étape, le serveur vérifie si les informations fournies sont correctes, et si c'est le cas, il crée une session au nom d'utilisateur et se redirige vers la page principale.php.

principale.php:

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
            
        </div>
    </body>
</html>