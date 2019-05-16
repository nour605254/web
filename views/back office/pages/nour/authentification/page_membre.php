<!DOCTYPE html>
<html>

    <head>
        <?PHP
//include "../../config.php";
include "C:/wamp64/www/tryyyy/core/nour/client/ClientCore.php";
$client1Controller=new ClientCore();
$listeClients=$client1Controller->afficherClients();

//var_dump($listeClients->fetchAll());
?>

<!-- Bootstrap CSS -->

        <meta charset="UTF-8">
        <title>Ouerghemmi Optique | gérer  clients</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/ajouter_admin.css" rel="stylesheet" type="text/css" />

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
            <a href="../index.html" class="logo">
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
                                        <a href="http://localhost/tryyyy/views/back office/pages/nour/authentification/se_connecter.php" class="btn btn-default btn-flat">déconnexion</a>
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
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../../index.html">
                                <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
                            </a>
                        </li>
                        <li>
                            <a href="../widgets.html">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                          <li>
                            <a href="http://localhost/tryyyy/views/back office/pages/nour/authentification/page_membre.php">
                                <i ></i> <span>Gérer clients</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                    <li>
                            <a href="../wifek/categorie.html">
                                <i ></i> <span>Gérer catégories et produits</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         
                        <li>
                            <a href="../houria/commande.html">
                                <i ></i> <span>Gérer commandes</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../houria/wishlist.html">
                                <i ></i> <span>Gérer wish-list</span>
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
                            <a href="../imen/promotion.html">
                                <i ></i> <span>Gérer promotions</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                  <li>
                            <a href="../imen/abonne.html">
                                <i ></i> <span>Gérer abonnés</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                          <li>
                            <a href="../hazem/pub.html">
                                <i></i> <span>Gérer publicités</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                         <li>
                            <a href="../event.html">
                                <i></i> <span>Gérer événements</span>
                                <small class="badge pull-right bg-red"></small>
                            </a>
                        </li>
                        
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="../UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="../UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>                                
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li class="active"><a href="data.html"><i class="fa fa-angle-double-right"></i> Tableau des produit en promotions</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="../examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>                                
                                <li><a href="../examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
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
                                    <h3 class="box-title">Liste des clients</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                       <thead class="thead-dark">
                                                    <tr>

                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Nom</th>
                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Prenom</th>
                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Email</th>
                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Pwd</th>
                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Adresse</th>
                                                      <th style="color: purple; font-weight: bold; font-size: 20px " scope="col">Numéro</th>
                                                      

                                                      <!--début champs action-->
                                                      <th scope="col"> Action <br>

                                                        <!--Bouton modifier-->
                                                    <a href="http://localhost/tryyyy/views/back office/pages/nour/client/affichermodifClient.php"><img src="src/icon.png" class="consult"></a>
                                                    <!--Bouton modifier-->

                                                    <!--Bouton supprimer-->
                                                  <a href="http://localhost/tryyyy/views/back office/pages/nour/client/affichersuppClient.php"> <img src="src/sup.png" class="consult"></a>
                                                  <!-- fin Bouton supprimer-->

                                                    <!--Bouton ajouter-->
                                                  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="src/plus.png" class="consult"></button>  
                                                  


<img src="img/email1.png" style="width: 20px; height: 20px;">

                                                  <?php
if(isset($_POST['mailform']))
{
$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
            <img src="http://www.primfx.com/mailing/banniere.png"/>
            <br />
            J\'ai envoyé ce mail avec PHP !
            <br />
            <img src="http://www.primfx.com/mailing/separation.png"/>
        </div>
    </body>
</html>
';

mail("nour.affes@esprit.tn", "Salut tout le monde !", $message, $header);
}
?>

<form method="POST" action="">
    <input type="submit" value="mail" name="mailform"/>
</form>



<a  href="impression.php">Imprimer</a>


                                                   <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <section>



<div class="row">
  <div class="col-75">
    <div class="container">
        <div class="row">
          <div class="col-50">
<!--
            <label for="fname"><i class="fa fa-user"></i>Nom & Prénom</label>
            <input type="text" id="fname" name="firstname" placeholder="Nom Prénom">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="exemple@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Ariana">
            <label for="cité"><i class="fa fa-institution"></i> Cité</label>
            <input type="text" id="city" name="city" placeholder="Tunis">
        -->
       

<h2>Créer un compte</h2>

    <form style="width: 30em; background-color: #00CED1; margin-left: 50%; margin-bottom: 100%" class="modal-content animate" id="form1" name="form1" method="POST" action="http://localhost/tryyyy/views/back office/pages/nour/authentification/page_membre.php">

    <div class="imgcontainer">
      <a href="page_membre.php"><span  onclick="document.getElementById('id01').style.display='block'" class="close" title="Close Modal">&times;</span></a>
    </div>

    <div class="container" >

            <label for="fname"><i class="fa fa-user"></i>Nom</label><br>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="text" id="fname" name="nom" value="" placeholder="    nom" required placeholder=""><br>


            <label  for="uname"><i class="fa fa-user"></i>Prénom</label><br>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="text" id="fname" name="prenom" value="" placeholder="    prénom" required placeholder=""><br>


      <label for="email"><i class="fa fa-envelope"></i>Email</label><br>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="email" id="email" name="email" value="" placeholder="       nom.prenom@esprit.tn"  required placeholder="" ><br><br>

      <label for="fname"><img src="pwd.png" style="height: 20px;width: 20px">Mot de passe</label><br>
      <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="password" placeholder="Mot de passe" name="pwd" id="pwd" value="" required placeholder="" required><br>


<label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label><br>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="text" name="adresse"  placeholder="Adresse" required placeholder="" ><br>


                <label for="fname"><img src="phone.png" style="height: 20px;width: 20px">Téléphone</label><br>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="number" name="numero" value="" placeholder="     +216 22 455 854" required placeholder="">
            <br><br>

      
      
          <div class="container" style="width: 30em;  margin-left: 3%">
            <div class="col"><input style="width: 285px;border-radius: 3px; color:green" class="btn" type="submit" name="button" id="button" value="Ajouter un client" /></div>
            <br>



                 <div><a href="page_membre.php"><button style="width: 285px; height: 35px; border-radius: 3px; color:green" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button><br></a>
                     </div>
    </div>


  </form>
</div>

          
    </div>
  </div>
</div>
</div>




</section>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> 
<!-- fin Bouton ajouter-->

</th>

<!--fin champs action-->
                                                    </tr>
                                                  </thead>

 

  
                                        
                                                                                 <?PHP
                                                                                    foreach($listeClients as $row){
                                                                                        ?>

                                                                                        <tbody>
                                                                                        <tr>
                                                                                            
                                                                                        <th><?PHP echo $row['nom']; ?></th>
                                                                                        <th><?PHP echo $row['prenom']; ?></th>
                                                                                        <th><?PHP echo $row['email']; ?></th>
                                                                                        <th><?PHP echo $row['pwd']; ?></th>
                                                                                        <th><?PHP echo $row['adresse']; ?></th>
                                                                                        <th><?PHP echo $row['numero']; ?></th>
                                                                                        
                                                                                        <th><form method="POST" action="http://localhost/tryyyy/views/back office/pages/nour/client/supprimerClient.php">
                                                                                        <center><input type="submit" name="supprimer" value="Désactiver" style="opacity: 0.8;;background-color: red;font-size: 14px;border-radius: 12px;"></center>
                                                                                        <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                                                        </form>
                                                                                        </th>
                                                                                        </tr>

                                                                                      </tbody>
                                                                                        <?PHP
                                                                                    }
                                                                                    ?>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            







<section class="content">
                    <div class="row">
                        <div class="col-xs-12">


                                    <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Statistiques sur le nombre de clients</h3>    




                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">

                                   <!-- <table id="example1" class="table table-bordered table-hover">-->



<div><a href="../client/statistique.php"><button style="width: 285px; height: 35px; border-radius: 3px; color:green" type="button" >Statistiques</button><br></a>
                     </div>



                                       

 
                                                                                            
                                                                                                
                                                                                      
                                    </table>
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