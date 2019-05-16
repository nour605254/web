
<?PHP
       include "header.php";
       ?>


 <section class="top-discount-area d-md-flex align-items-center">


<?PHP
include '../../../../core/config.php';
include "../../../../core/nour/adresse/adresseCore.php";
$adresse1Controller=new AdresseCore();
$listeAdresses=$adresse1Controller->afficherAdresses();

//var_dump($listeClients->fetchAll());
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
  <body>
 <br/> <center> <h1></h1></center><br/>
    <div class="container">
      <div class="row">
    <table class="table" border="1">

  <thead class="thead-dark">
    <tr>

      <th scope="col">Classement</th>
      <th scope="col">Adresse</th>
      <th scope="col">Nom du récepteur</th>
      <th scope="col">Numéro du récepteur</th>
      <th scope="col">Supprimer</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>

<?PHP
foreach($listeAdresses as $row){
    ?>

    <tbody>
    <tr>
        
    <th scope="row"><?PHP echo $row['classement']; ?></th>
    <th><?PHP echo $row['ad']; ?></th>
    <th><?PHP echo $row['nomr']; ?></th>
    <th><?PHP echo $row['numr']; ?></th>
    <th ><form method="POST" action="supprimerAdresse.php">
    <center><input class="btn btn-danger" type="submit" name="supprimer" value="supprimer" ></center>
    <input type="hidden" value="<?PHP echo $row['classement']; ?>" name="classement">
    </form>
    </th>
    <th ><a class="btn btn-primary" href="modifierAdresse.php?classement=<?PHP echo $row['classement']; ?>">
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


