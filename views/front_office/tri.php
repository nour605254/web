<?php
ob_start();
include "../../core/fonctions-panier.php";
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
    <title>Ouerghemmi Optic - Opticienne Optométriste  | Acceuil</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min" rel="stylesheet">
    <link rel="stylesheet" href="css/themify-icons">
    <link rel="stylesheet" href="brabi.css">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                              <h6>Catégories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Collection Lunettes <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="#">Optic</a></li>
                            <li><a href="#">Solaire</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#man" class="collapsed">
                        <a href="#">Collection Lentilles <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="man">
                            <li><a href="#">Couleurs</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="#">Collection Montres <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="#">Pour Hommes</a></li>
                            <li><a href="#">Pour Femmes</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="http://localhost/projet/views/frontoffice/index.php"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                 <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?php echo compterArticles();?></span> <i class="ti-bag"></i> Panier  <?php echo MontantGlobal();  ?> d</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            
                                                <?php
                                                include_once("../../core/fonctions-panier.php");

                                                $nbArticles=count($_SESSION['panier']['libelleProduit']);
                                                 if ($nbArticles <= 0)
                                            echo "<tr><td>Votre panier est vide </ td></tr>";
                                            else
                                            {
                                                for ($i=0 ;$i < $nbArticles ; $i++)
                                                {    ?>

                                                <li>
                                                <a href="#" class="image"><img src="../../../tryyyy/views/back office/pages/wifek/productimg/<?php echo $_SESSION['panier']['image'][$i]; ?>" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#"><?php echo $_SESSION['panier']['libelleProduit'][$i]; ?></a></h6>
                                                    <p><?php echo $_SESSION['panier']['qteProduit'][$i]; ?>x - <span class="price"><?php echo $_SESSION['panier']['prixProduit'][$i]; ?></span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                                <?php } ?>
                                                <li class="total">
                                                <span class="pull-right"><?php echo "Total : ".MontantGlobal(); ?></span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Commande</a>
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

        <!-- ****** Top Discount Area Start ****** -->
        <section class="top-discount-area d-md-flex align-items-center">
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Soldes Allant jusqu'au 80% </h5>
                <h6><a href="#">Achetez Maintenant</a></h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>20% Solde pour les montres</h5>
                <h6>CODE PROMO : OurgOp</h6>
            </div>
            <!-- Single Discount Area -->
            <div class="single-discount-area">
                <h5>Livraison Gratuite</h5>
                <h6>CODE PROMO : OuerghEtud</h6>
            </div>
        </section>
        <!-- ****** Top Discount Area End ****** -->

        <!-- ****** Welcome Slides Area Start ****** -->
        <section class="welcome_area">
            <div class="welcome_slides owl-carousel">
                <!-- Single Slide Start -->
            

                <!-- Single Slide Start -->
                

                <!-- Single Slide Start -->
                
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Top Catagory Area Start ****** -->
        <section class="top_catagory_area d-md-flex clearfix">
             
            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url('lunette femme.jpg');" >
            
                                           
  
                <div class="catagory-content">

                    <h6>Voici </h6>
                    <h2>Les soldes</h2>
                </div>
            </div>


            <!-- Single Catagory -->
            <div class="single_catagory_area d-flex align-items-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                <div class="catagory-content">
                    <h6>Avec un</h6>
                    <h2>Regard attirant</h2>
                </div>
            </div>
        </section>
        <!-- ****** Top Catagory Area End ****** -->

        <!-- ****** Quick View Modal Area Start ****** -->

        <!-- ****** Quick View Modal Area End ****** -->

        <!-- ****** new arrivals Area Start ****** -->
        <section class="new_arrivals_area section_padding_100_0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>Promotions</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="karl-projects-menu mb-100">
                <div class="karl-projects-menu mb-100">
                <div class="text-center portfolio-menu">
                    <a class="btn active" data-filter="*" href="promotion.php">Nos Produits</a>
                    <a class="btn" data-filter=".women" href="tri.php?critere=nbr_achat">Plus vendus</a>
                    <a class="btn" data-filter=".man" href="tri.php?critere=remise">Remise</a>
                    <a class="btn" data-filter=".access" href="tri.php?critere=date_ajout"> Date</a>
                </div>
            </div>
            </div>

            <div class="container">
                <div class="row karl-new-arrivals">
 <?php
include "../../core/promotionC.php";
/*
$promoC=new promotionC();

$listepromo=$promoC->recupererpromotion("1");
$promo=$promoC->recupererpromotion("1");
foreach($promo as $id){

$prix=$promoC->selectprix_prod($id["id_produit"]);
foreach($prix as $pr){
    $marque=$pr["marque"];
$type_produit=$pr["type_produit"];

}
$rem=floatval($id["remise"]);

$prix_remise=floatval($pr["prix"]);

$remi=($rem*$prix_remise)/100;
$prix_final=$prix_remise-$remi;
 
}
 

foreach($listepromo as $row){

$num_promotion=$row["num_promotion"];*/

$promo=new promotionC();
$listpromo=$promo->trierpromo($_GET['critere']);



foreach ($listpromo as $row) {
    # code...

$prix=$promo->selectprix_prod($row["id_produit"]);
foreach($prix as $pr){
    $marque=$pr["marque"];
$type_produit=$pr["type_produit"];

}
$rem=floatval($row["remise"]);

$prix_remise=floatval($pr["prix"]);

$remi=($rem*$prix_remise)/100;
$prix_final=$prix_remise-$remi;
 

//var_dump($listeEmployes->fetchAll());
?>
                    <!-- Single gallery Item Start -->
                    <div class="col-12 col-sm-6 col-md-4 single_gallery_item women wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Product Image -->
                       

                        <div class="product-img">
                            <img src="<?PHP echo $row['image']; ?>" alt=""> 
                            <div class="product-quicview">
                                <a href="sondos.php? num_promotion=<?PHP echo $row['num_promotion']; ?>"><i class="ti-plus"></i></a>
                            </div> 
                        </div> </td>
                   

                      <!-- Product Description -->
                       <div class="product-description">
                       	<div class="offer-product-price">
                                <del><h3 style="color: #BA0309;"><?PHP echo $prix_remise; ?> DT</h3></del><h3 style="color:#EF2E34;"><?php echo $prix_final; ?> DT</h3>
                            </div>
                            <p style="text-shadow: 1px 1px red;" ><?php echo $marque;?>
                                <br>
                                <?php echo $type_produit; ?>
                            </p>

                           <img src="eye-512" height="20" width="20"> <?php  echo $row['nbr_vue']; ?>
                           <a href="#" class="add-to-cart-btn">Ajouter à ma commande</a>
                        </div>
                    </div>





<?php 

if (date("Y-m-d")==$row['date_fin']){

    $promo->supprimerpromo($row['num_promotion']);
    header('Location: promotion.php');
           ob_enf_flush();

} 




}?> 
                    <!-- Single gallery Item Start -->
                   
                </div>
            </div> 
        </section>
        <!-- ****** new arrivals Area End ****** -->

        <!-- ****** Offer Area Start ****** -->
       
        <!-- ****** Offer Area End ****** -->

        <!-- ****** Popular Brands Area Start ****** -->
        
        <!-- ****** Popular Brands Area End ****** -->

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
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single_footer_area">
                            <ul class="footer_widget_menu">
                                <li><a href="#">Mon Compte</a></li>
                                <li><a href="#">Livraison</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Area Start -->
                    <div class="col-12 col-lg-5">
                        <div class="single_footer_area">
                            <div class="footer_heading mb-30">
                                <h6>Inscrivez-vous à notre newsletter</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="imen/ajoutabonne.php" method="post" onsubmit="Validate();">
                                
                                    <input type="email" name="mail" class="mail" placeholder="Votre Mail Ici">
                                    <button type="submit" class="submit">Souscrire</button>
                                </form>
                            </div>
                            
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