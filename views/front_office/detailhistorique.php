  <?php
session_start();
if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['image'] = array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ouerghemmi Optic - Opticienne Optométriste  | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>


    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area bg-img background-overlay-white" style="background-image: url(img/bg-img/bg-1.jpg);">
            
            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.php">Acceuil</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="afficherProd.php">Catégorie et Produits</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="promotion.php">Promotion</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="cart.php">Cart</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="checkout.php">Checkout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="Tel: +216 72 445 440"><i class="ti-headphone-alt"></i> +216 72 445 440</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->


        </div>
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                            <h1>les commandes</h1>

                       
 


<?PHP
include "../../entities/lignec.php";
include "../../core/lignecC.php";
include "../../core/config.php";
$lignec1C=new lignecC(0,0,0,0);
$listeligne=$lignec1C->recupererligne($_GET['numC']);
?>
     <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>num du produit</th>
                                                <th>quantité</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                          
                                            <tr>
<?PHP
foreach($listeligne as $row){
    ?>
    <tr>
    <td><?PHP echo $row['nom_produit']; ?></td>
    <td><?PHP echo $row['quantite']; ?></td>
    </tr>
        <?php }  ?>                             </tr>    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>num du produit</th>
                                                <th>quantité</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                      </div>

                        

                    </div>
                </div>

                   
                </div>
            </div>


                            </div><!-- /.box -->
                    <!-- Single Footer Area Start -->
                               

                    
                </div>
                         <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">A propos</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                <div class="line"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
