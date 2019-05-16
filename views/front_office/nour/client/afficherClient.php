<?PHP
include "header.php";
?>
        <section class="top-discount-area d-md-flex align-items-center">
                                <?PHP
//include "../../config.php";
include "C:/wamp64/www/tryyyy/core/nour/client/ClientCore.php";

include "C:/wamp64/www/tryyyy/entities/nour/client/client.php";

if (isset($_GET['id'])){
$client1Controller=new ClientCore();
$listeClients=$client1Controller->afficherClient($client);

//var_dump($listeClients->fetchAll());
?>


<!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
  <body>
 <br/> <center> <h1></h1></center><br/>
    <div class="container">
      <div class="row">
    <table class="table" border="1">

  <thead class="thead-dark">
    <tr>

      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Pwd</th>
      <th scope="col">Adresse</th>
      <th scope="col">Numéro</th>
      <th scope="col">Supprimer</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>

<?PHP
foreach($listeClients as $row){
    ?>

    <tbody>
    <tr>
        
    <th scope="row"><?PHP echo $row['id']; ?></th>
    <th><?PHP echo $row['nom']; ?></th>
    <th><?PHP echo $row['prenom']; ?></th>
    <th><?PHP echo $row['email']; ?></th>
    <th><?PHP echo $row['pwd']; ?></th>
    <th><?PHP echo $row['adresse']; ?></th>
    <th><?PHP echo $row['numero']; ?></th>
    <th><form method="POST" action="supprimerClient.php">
    <center><input type="submit" name="supprimer" value="supprimer" style="opacity: 0.8;;background-color: salmon;font-size: 14px;border-radius: 12px;"></center>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </th>
    <th><a href="modifierClient.php?id=<?PHP echo $row['id']; ?>">
    Modifier</a></th>
    </tr>

  </tbody>
    <?PHP
}
?>
        
</table>
</div>
</div>
        </section>




    <?PHP
       include "footer.php";
       ?>

</body>

</html>