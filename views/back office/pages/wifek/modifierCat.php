<?php
ob_start();

?>
<?PHP
include "../../../../entities/categoriee.php";
include "../../../../core/categorieC.php"; 
if (isset($_GET['id_categorie'])){
    $categorieC=new CategorieC();
    $result=$categorieC->recupererCategorie($_GET['id_categorie']);
    foreach($result as $row){
        $id_categorie=$row['id_categorie'];
        $nom_categorie=$row['nom_categorie'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ouerghemmi Optique | Gérer  catégories et produits</title>
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

        <link rel="stylesheet" type="text/css" href="../../pages/wifek/style.css">


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
                     
                        <!-- Notifications: style can be found in dropdown.less -->
             
                        <!-- Tasks: style can be found in dropdown.less -->
                    
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
                         Catégories
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Catégories</h3>                                    
                                </div><!-- /.box-header -->
                                
                                <form method="POST"   name="f">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Catégories</th>
                                                <th>Nom Catégories</th>
                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td><input type="number" min="0" name="id_categorie" value="<?PHP echo $id_categorie ?>" required></td>
                                                <td>
                                                    <input type="text" name="" disabled value="<?PHP echo $nom_categorie ?>" >
                                            <select type="text"  name="nom_categorie" required  >
                                                        <option value="Lunettes">Lunettes</option>
                                                        <option value="Lentilles">Lentilles</option>
                                                        <option value="Montre">Montre</option>
                                                      </select>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Catégories</th>
                                                <th>Nom Catégories</th>
                                            </tr>
                                        </tfoot>

                                    </table>
                            <input type="submit" value="Modifier" name="modifier" onclick="test()">
                            <input type="hidden" name="idc" value="<?PHP echo $_GET['id_categorie'];?>">

                                </form>
                               <?PHP
                                }
                                }
                                if (isset($_POST['modifier'])){
                                    $categorie=new categorie($_POST['id_categorie'],$_POST['nom_categorie']);
                                    $categorieC->modifierCategorie($categorie,$_POST['idc']);
                                    echo $_POST['idc'];
                                    header('Location: categorie.php');
                                     ob_enf_flush();
                                }
                                ?>
                           
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script type="text/javascript" src="categoriee.js"></script>


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
