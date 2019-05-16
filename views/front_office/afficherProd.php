    <?php 
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
    <title>Ouerghemmi Optic - Opticienne Optométriste | Shop</title>

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

                                            <li data-toggle="collapse" data-target="#women2">
                                                <a href="recherchersolaire.php">Collection Lunettes</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#man2" class="collapsed">
                                                <a href="rechercherlentilles.php">Collection Lentilles</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li data-toggle="collapse" data-target="#kids2" class="collapsed">
                                                <a href="recherchemontre.php">Collection Montres</a>
                                                <ul class="sub-menu collapse" id="kids2">
                                            </li>


                </ul>
            </div>
        </div>
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
                           
                            <div class="fb-share-button" data-href="https://www.facebook.com/Ouerghemmi-Optic-1953237221559529/" data-layout="button_count" data-size="small">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FOuerghemmi-Optic-1953237221559529%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook" aria-hidden="true"></i>Partager</a></div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            <li class="nav-item active"><a class="nav-link" href="index.php">Acceuil</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="afficherProd.php">Produits</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="promotion.php">Promotion</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="cart.php">Cart</a></li>
                                            <li class="nav-item active"><a class="nav-link" href="checkout.php">Checkout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                            <li class="nav-item"><a class="nav-link" href="evenement.php">evenement</a></li>
                                            <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
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

        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="img/product-img/product-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Boutique Ouerghemmi Optic</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>

                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" value="5" class="cart-submit">Ajouter à ma commandet</button>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- Compare -->
                                            <div class="modal_pro_compare">
                                                <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">
                           
                            <div class="widget catagory mb-50">
                                <a href="prixDecroissant.php"> Prix Décrosissant</a>

                                <!--  Side Nav  -->
                                <div class="nav-side-menu">
                                    <h6 class="mb-0">Catégories</h6>

                                    <div class="menu-list">


                                        <ul id="menu-content2" class="menu-content collapse out">
                                            <!-- Single Item -->
                                                                            <!-- Single Item -->
                    
                                            <!-- Single Item -->


                                            <li>
                                                <a href="recherchersolaire.php">Collection Lunettes</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li>
                                                <a href="rechercherlentilles.php">Collection Lentilles</a>
                                            </li>
                                            <!-- Single Item -->
                                            <li>
                                                <a href="recherchemontre.php">Collection Montres</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                      
                            <div class="widget price mb-50">
                                <h6 class="widget-title mb-30">Filtrer par Prix</h6>
                                <div class="widget-desc">
                                    <div id="filter-bar" class="slider-range">
                                        <div data-min="0" data-max="500" data-unit="DT" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"  data-value-min="0" data-value-max="500" data-label-result="Prix:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                    <div class="range-price">
                                    Prix :  <span id="value-lower">0</span> DT - <span id="value-upper">300</span> DT
                                </div>                                    

                                        </div>

                                </div>
                            </div>


<input id="myInput" type="text" placeholder="Search..">

                        <br>

<?PHP
include "../../../tryyyy/core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherProduits();
$listeproduitss=$produit1C->afficherProduitss();

//var_dump($listeEmployes->fetchAll());
?>

                            <div class="widget recommended">
                                <h6 class="widget-title mb-30">Recommandation</h6>

                                <div class="widget-desc">

                                             <?PHP
                                            foreach($listeproduitss as $row){
                                            ?>  

                                    <!-- Single Recommended Product -->
                                    <div class="single-recommended-product d-flex mb-30">
                                        <div class="single-recommended-thumb mr-3">
                                            <img src="../../../tryyyy/views/back office/pages/wifek/productimg/<?PHP echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="single-recommended-desc">
                                            <h6 ><?PHP echo $row['type_produit'];?></h6>
                                            <prix><?PHP echo $row['prix'];?> DT</prix>
                                        </div>
                                    </div>
                                    <!-- Single Recommended Product -->

                                            <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-8 col-lg-9">
                          <div class="wrapper">
  <div class="container">
    
    <div class="row">
      <div class="col-sm-12">
        
                        <div class="shop_grid_product_area" >
                            <div class="row" id="myList">
                                             <?PHP
                                            foreach($listeproduits as $row){
                                            ?>  

                                <!-- Single gallery Item -->
                                <div id="nadim" class="col-12 col-sm-6 col-lg-4 single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s" >
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="../../../tryyyy/views/back office/pages/wifek/productimg/<?PHP echo $row['image']; ?>" alt="">
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description" >

                                        <prix class="product-price"><?PHP echo $row['prix'];?> DT</prix>
                                        <p ><?PHP echo $row['type_produit'];?> </p>
                                        <!-- Add to Cart -->
                                        <a href="cart.php?action=ajout&amp;l=<?php echo $row['marque']; ?>&amp; q=1&amp;p=<?php echo $row['prix']; ?>&amp;im=<?php echo $row['image']; ?>" class="add-to-cart-btn">Ajouter à ma commande</a>
                                    </div>
                                </div>
                                            <?php } ?>

                            </div>
                        </div>



        <ul id="pagination-demo" class="pagination-sm"></ul>
      </div>
    </div>

    <div id="page-content" class="page-content">Page 1</div>
  </div>
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
    <!-- recherche  -->
    <script type="text/javascript">
        $(function(){
            $("[name='search-product']").keyup(function(){
                $(".block2").each(function(){
                    var chaine=$("[name='search-product']").val();
                    var n1=$(this).find('[href="product-detail.html"]').text()
                    t=n1.indexOf(chaine);
                    if(t==-1){
                        $(this).parent().hide();
                    }
                    else{
                        $(this).parent().show();
                    }
                    
                })
            })
        })

    </script>

<script type="text/javascript">

        $(function(){

            setInterval(function(){
                var min=parseFloat($('#value-lower').text());
                var max=parseFloat($('#value-upper').text());
                $(".block2").each(function(){
                    var prix=parseFloat($(this).find("prix").text());
                    if(prix>=min && prix<=max){
                        $(this).parent().show();
                    }
                    else{
                        $(this).parent().hide();
                    }
                    
                })              
            },100)
        })

        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>

<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
    <script type="text/javascript">
        /*[ No ui ]
        ===========================================================*/
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 0, 500 ],
            connect: true,
            range: {
                'min': 0,
                'max': 500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]) ;
        });
    </script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList #nadim").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


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