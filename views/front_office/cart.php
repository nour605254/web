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

require_once "../../core/fonctions-panier.php";
$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
    $im = (isset($_POST['im'])? $_POST['im']:  (isset($_GET['im'])? $_GET['im']:null )) ;
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}



if (!$erreur){
   switch($action){
      Case "ajout":
        $article=getArticle($l);
         ajouterArticle($l,$q,$p,$im,$article['quantite']);

         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            $article=getArticle($_SESSION['panier']['libelleProduit'][$i]);
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]),$article['quantite']);
         }
         break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
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
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
       
    </div>


    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area bg-img background-overlay-white" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity"> <?php echo compterArticles();?></span> <i class="ti-bag"></i> Panier   <?php echo MontantGlobal();  ?> d</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            
                                                <?php


                                                $nbArticles=count($_SESSION['panier']['libelleProduit']);
                                                 if ($nbArticles <= 0)
                                            echo "<tr><td>Votre panier est vide </ td></tr>";
                                            else
                                            {
                                                for ($i=0 ;$i < $nbArticles ; $i++)
                                                {    ?>

                                                <li>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#"><?php echo $_SESSION['panier']['libelleProduit'][$i]; ?></a></h6>
                                                    <p><?php echo $_SESSION['panier']['qteProduit'][$i]; ?>x - <span class="price"><?php echo $_SESSION['panier']['prixProduit'][$i]; ?></span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                                <?php } ?>
                                                <li class="total">
                                                <span class="pull-right"><?php echo "Total : ".MontantGlobal(); ?></span>
                                                <a href="cart.php" class="btn btn-sm btn-cart">Commande</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                               <?php } ?>
                                
                                            
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

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


        <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table clearfix">
                           <form method="post" action="cart.php">
                            <h1>Votre panier</h1>
<table >
    
        
    
    <tr>
        <th>Produit</th>
        <th>Libellé</th>
        <th>Quantité</th>
        <th>Prix Unitaire</th>
        <th>Action</th>
    </tr>
   

    <?php
    if (creationPanier())
    {  
       $nbArticles=count($_SESSION['panier']['libelleProduit']);
       if ($nbArticles <= 0)
       echo "<tr><td>Votre panier est vide </ td></tr>";
       else
       {    
          for ($i=0 ;$i < $nbArticles ; $i++)
          {   
            
             echo "<tr>" ;
             
                       ?><td><img  width="40%" src="../back office/pages/wifek/productimg/<?php echo $_SESSION['panier']['image'][$i];  ?>"></td><?php 
             echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
             echo "<td><input type=\"number\" min=\"1\"   name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
             echo "<td><a href=\"".htmlspecialchars("cart.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">supprimer </a></td>";
             echo "</tr>";
          }

          echo "<tr><td colspan=\"2\"> </td></tr>";

          echo "<tr><td colspan=\"4\">";
          ?>
           <div class="col-12 col-lg-4">
                        <div class="cart-total-area mt-70">
                            <div class="cart-page-heading">
                                <h5>Prix Total de la commande</h5>
                               
                            </div>

                            <ul class="cart-total-chart">
                                <li><span>total :</span> <?php echo MontantGlobal();  ?> dt </li>
                            </ul>
                            <a href="checkout.php" class="btn karl-checkout-btn">Confirmer la commande</a>
                        </div>
                    </div><br><br><br>
          <?php
          echo "<input type=\"submit\"  class=\"btn karl-checkout-btn\"  value=\"Mettre à jour ma commande\"/>";
          echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
          ?>
          <br><br>

                   <div class="ccart-total-area mt-70"  >
                            <div >
                                <a href="index.php" class="btn karl-checkout-btn" >Continue shooping</a>
                            </div>
                            <div >
                              <br><br>
                            <a href="historique.php" class="btn karl-checkout-btn" >consulter votre historique</a>
                            </div>
                           
                        </div>
          <?php 
          echo "</td></tr>";
       }
    }
    ?>
</table>
</form>
                        </div>

                        

                    </div>
                </div>

                   
                </div>
            </div>
        </div>
        
        <!-- ****** Cart Area End ****** -->

        <!-- ****** Footer Area Start ****** -->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_footer_area">
                            <div class="footer-logo">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">A propos</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
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
