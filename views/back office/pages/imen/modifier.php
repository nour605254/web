<?php
ob_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ouerghemmi Optique | gérer  promotion</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="modifier.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               Ouerghemmi Optique
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/islem.jpg" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Oueghemmi Optique
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">vous avez 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 nouveaux membres today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> descritiption
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 nouveau membres
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 ventes aujourd'hui
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> vous avez changer votre username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez 9 taches</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Islem Ouerghemmi <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/islem.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        Ouerghemmi - Opticienne
                                        <small>depuis 2017</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Abonnés</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Ventes</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Amis</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">déconnecter</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/islem.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bienvenue, Islem</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> en ligne</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="chercher..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                                        <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                   
     
                         <li>
                            <a href="../nour/clients.html">
                                <i ></i> <span>Gérer clients</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                    <li>
                            <a href="categorie.php">
                                <i ></i> <span>Gérer catégories </span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         
                         <li>
                            <a href="produits.php">
                                <i ></i> <span>Gérer Produits </span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         
                        <li>
                            <a href="../houria/commande.php">
                                <i ></i> <span>Gérer commandes</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../houria/blog.php">
                                <i ></i> <span>Gérer Arcticles</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../ahmed/livraison.html">
                                <i ></i> <span>Gérer livraisons</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>>
                       
                          <li>
                            <a href="../imen/promotion1.php">
                                <i ></i> <span>Gérer promotions</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                  <li>
                            <a href="../imen/abonne.php">
                                <i ></i> <span>Gérer abonnés</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                          <li>
                            <a href="../hazem/pub.php">
                                <i></i> <span>Gérer publicités</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../event.php">
                                <i></i> <span>Gérer événements</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        tableau des clients
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Acceuil</a></li>
                        <li><a href="#">Tableaux:</a></li>
                        <li class="active">Tableau :</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Gérer les promotions :</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    




<!--khedmit jdida-->
<script  src="modifier.js"></script>
<div class="form-style-5">
<?PHP
include "../../../../entities/promotion.php";
include "../../../../core/promotionC.php";
if (isset($_GET['num_promotion'])){
    $promoC=new promotionC();
    $listeprod=$promoC->afficher();

    $result=$promoC->recupererpromotion($_GET['num_promotion']);
    foreach($result as $row){
        $id_produit=$row['id_produit'];
        $id=$id_produit;
        $num_promotion=$row['num_promotion'];
        $num=$num_promotion;
        $titre=$row['titre'];
      
        $remise=$row['remise'];

        $date_ajout=$row['date_ajout'];
        $description=$row['description'];
        $image=$row['image'];
        $date_fin=$row['date_fin'];
?>


<form name="f" method="POST" >
<fieldset>
<legend><span class="number">1</span> Promotion :</legend>
<label for="job">id produit:</label>
<div id="id_div"><select name="id_produit"> 
    <?php foreach($listeprod as $row)
{ 
?>
    <option value="<?php echo $row['id_produit'];?>"><?php echo $row['id_produit']; //ghaltaaaa}?></option>
  <?php }?>
</select></div><div id="id_erreur"></div>
<label for="job">numéro promotion:</label>
<?PHP echo $num_promotion ;?>
<label for="job">Titre:</label>
<div id="titre_div">
<input type="text" name="titre" placeholder="Black friday*" value="<?PHP echo $titre ;?>" ></div><div id="titre_erreur"></div>

<label for="job">Remise:</label>
<div id="remise_div">
<input type="number" name="remise" placeholder="15 %" value="<?PHP echo $remise; ?>" ></div><div id="remise_erreur"></div>

<label for="job">Date d'ajout:</label>
<div id="date_div"><input type="date" name="datee" placeholder="" value="<?PHP echo $date_ajout; ?>"></div><div id="date_erreur"></div>
<label for="job">Date de fin:</label>
<div id="date_div1"><input type="date" name="date_fin" placeholder="" value="<?PHP echo $date_fin; ?>"></div><div id="date_erreur1"></div>
<label for="job">Description:</label>
<div id="description_div">
<textarea  name="description" placeholder="Description" ><?PHP echo $description ?></textarea></div><div id="description_erreur"></div>
<label for="job">Chemin de l'image:</label>
<div id="image_div">
<input type="file" name="image" value="<?php echo $image ?>"></div><div id="image_erreur"></div>

</fieldset>

<input type="submit" value="Modifier totalement" name="modifier" onclick="test2();" />
<input type="hidden" name="cin_ini" value="<?PHP echo $_GET['num_promotion'];?>"></td>

</form>
<?PHP
    }
} 
if (isset($_POST['modifier'])) {
 if(date("Y-m-d")!= $_POST['datee'])
{
?>

    <script type="text/javascript" > 
        var date = document.forms['f']['datee'];

date.style.border = "1px solid red";
    document.getElementById('date_div').style.color = "red";
    date.style.border = "1px solid red";
    date_erreur.textContent = "Veuillez saisir l'année courante";
    date.focus();



</script>

<?php
}else if($_POST["remise"]>90 || $_POST["remise"]<1)
{
    ?>

  <script type="text/javascript" > 
        var remise = document.forms['f']['remise'];

remise.style.border = "1px solid red";
    document.getElementById('remise_div').style.color = "red";
    remise.style.border = "1px solid red";
    remise_erreur.textContent = "Veuillez saisir remise entre 1 et 90%";
    remise.focus();



</script>


    <?php
}elseif($_POST['datee'] > $_POST['date_fin'])
{
?>

    <script type="text/javascript" > 
        var date = document.forms['f']['date_fin'];

date.style.border = "1px solid red";
    document.getElementById('date_div1').style.color = "red";
    date.style.border = "1px solid red";
    date_erreur1.textContent = "Veuillez saisir le date de fin correctement";
    date.focus();
</script>

<?php
}else{
    $promo=new promotion($_POST['id_produit'],$_POST['titre'],$_POST['remise'],$_POST['datee'],$_POST['description'],$_POST['image'],$_POST['date_fin']);
    $promoC->modifierpromo($promo,$_POST['cin_ini']);
    echo $_POST['cin_ini'];
 header('Location: promotion1.php');
   ob_end_flush();
}
}

?>
</div> 

<!--toufa lina-->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                           
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- T TABES SCRIPT -->
        <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

    </body>
</html>