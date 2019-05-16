 <?php
                            session_start();
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
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                        <a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Panier  $20</a>
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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.php">Acceuil</a>
                                                    <a class="dropdown-item" href="shop.html">Shop</a>
                                                    <a class="dropdown-item" href="product-details.html">Product Details</a>
                                                    <a class="dropdown-item" href="cart.html">Commandes</a>
                                                    <a class="dropdown-item" href="checkout.html">Login</a>
                                                </div>
                                            </li>
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
       
<section>
    <?PHP
include "../../core/eventC.php";
$event1C=new eventC();
$listeEvents=$event1C->afficherEvents();


//var_dump($listePubs->fetchAll());
?>
<?PHP
                                            foreach($listeEvents as $row){
                                                $id_event=$row['id_event'];
                                            ?>
    <!-- ****** Popular Brands Area Start ****** -->
        <section class="karl-testimonials-area section_padding_100">
            
            <div style="background-color: #EDD8D8;margin-top: -140px;" class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2><?PHP echo $row['titre_event']; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="karl-testimonials-slides owl-carousel">

                            
 <!-- Single Testimonial Area -->
                            <div class="single-testimonial-area text-center">
                                <span class="quote">"</span>
                                <h6>******BIENVENU DANS NOTRE EVENMENT**** </h6>
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
                                <h6><?PHP echo $row['desc_event']; ?> </h6>
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
        <section class="offer_area height-700 section_padding_100 bg-img" style="background-image: url(<?PHP echo $row['image']; ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-end">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="offer-content-area wow fadeInUp" data-wow-delay="1s">
                            <h2><?PHP echo $row['titre_event']; ?> <span class="karl-level">Hot</span></h2>
                            <p>* debut Solde le <?PHP echo $row['date_d_event']; ?> jusqu'à le <?PHP echo $row['date_f_event']; ?></p>
                            <div >
                                <h3 style="color: #FF1493;"><span style="color: #FFFAF0;" ><?PHP echo $row['type_event']; ?></span> $15.90</h3>
                                <h4 style="color: #FFFAF0;">Adresse:<?PHP echo $row['adresse_event']; ?></h4>
                            </div>
                           
                            <div class="subscribtion_form">
                                <form action="ajoutabonne.php" method="post">

                                   <?PHP 
                                 if(isset($_SESSION['username'])) {
                                     
                                  ?>
                                    <input type="hidden" name="mail" class="mail" value="<?PHP 
                                    echo $_SESSION['user_email'] ?>">
                                    <button  class="submit" onclick="<?php 

                                     

$connect = mysqli_connect("localhost", "root", "", "projet");
 $query = "UPDATE event SET nb=nb+1 WHERE id_event=id_event";
 $result = mysqli_query($connect, $query);



 ?>"  type="submit" name="done"> Participé </button> 
                                        
                                    
                                </form>
                                


                            </div>

                            <button id="my_image" type="submit" alt="" src="../../admin/views/images/<?php echo $result['image']; ?>" class="karl-level" onclick="fbs_click(this)"><i class="fa fa-facebook"></i>partager à facebook</button><?PHP
                             }
                              ?>

                        </div> 
                        

                                    
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br>
        <!-- ****** Offer Area End ****** -->
        <?PHP
                    }
                                               ?> 
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
                                <li><a href="#">Blog</a></li>
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
<script>
                                             function fbs_click(TheImg) {
                                                          var u='http://localhost/themust/front/views/blog-details.php?idd=123'
     // t=document.title;
                                                    var t=TheImg.getAttribute('alt');
                                              window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
                                                      }
                                                     </script>
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