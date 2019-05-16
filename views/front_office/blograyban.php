    <?php 
include "../../core/fonctions-panier.php";

session_start();
if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
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
                              <h6>Marque</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Retro Eyewear<span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                         <li><a href="#">carrera</a></li>
                         <li><a href="#">ray ban</a></li>
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
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity"><?php echo compterArticles();?></span> <i class="ti-bag"></i> Panier  <?php echo MontantGlobal();  ?> d</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-10.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Commandes</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Login</a>
                                            </li>
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

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Marque</h6>
                                    <div class="menu-list">
                                         <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#women2">
                                                <a href="blogretro.php">Retro eyewear</a>
                                               
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#man2" class="collapsed">
                                                <a href="blogcarrera.php">carrera</a>
                                               
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                                <a href="blograyban.php">ray ban</a>
                                               
                                            </li>
                                            <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                                <a href="blog.php">toutes les marques </a>
                                               
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

  


                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                      <section>
    <?PHP
include "../../core/blogC.php";
include "../../core/likeC.php";
$blog1C=new blogC();
$listeblogs=$blog1C->afficherblograyban();



//var_dump($listePubs->fetchAll());
?>
<?PHP
                                            foreach($listeblogs as $row){
                                                $numBlog=$row['numBlog'];
                                            ?>
    <!-- ****** Popular Brands Area Start ****** -->
    <br><br><br><br>
        <section class="karl-testimonials-area section_padding_100">
            
            <div style="background-color: #EDD8D8;margin-top: -140px;" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2><?PHP echo $row['titreBlog']; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            
 <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>******BIENVENU DANS NOS ARTICLES**** </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    <div class="tes-thumbnail">
                                        <img src="img/bg-img/tes-1.jpg" alt="">
                                    </div>
                                    <div class="testi-data">
                                        <p>Werghemi optic</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6><?PHP echo $row['description']; ?> </h6>
                                <div class="testimonial-info d-flex align-items-center justify-content-center">
                                    
                                    
                                </div>
                            </div>

                           

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ****** Popular Brands Area End ****** -->
        

        <!-- ****** Offer Area Start ****** -->
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?PHP echo $row['imageBlog']; ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                       <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2><?PHP echo $row['titreBlog']; ?> <span class="karl-level">Hot</span></h2>
                           <p><?PHP echo $row['description']; ?></p>
                           <?php 
                           $jaime=new likeC();
                           $j=$jaime->recupererlike($numBlog,1);
                           $somme=0;
                           foreach ($j as $key ) {
                               $somme=$somme+1;
                           }
                           if ($somme==0)
                           {
                            ?>
                           <form method="POST" action="nombrelike.php?id=<?PHP echo $numBlog ?>">
                                <button  class="submit" type="submit" name="done"> j'aime </button>
                            </form>
                            <?php
                           }else
                           {

                            ?>
                           <form method="POST" action="nombrelike.php?id=<?PHP echo $numBlog ?>">
                                <button  class="submit" type="submit" name="done"> j'aime pas  </button>
                            </form>
                            <?php
                           }
                            ?>
                            
                            
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ****** Offer Area End ****** -->
        <?PHP
                    }
                                               ?> 
</section>

                        <div class="shop_pagination_area wow fadeInUp" data-wow-delay="1.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        

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