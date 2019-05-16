<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ouerghemmi Optic - Opticienne Optométriste  | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css1/connexion.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Responsive CSS -->
    <link  rel="stylesheet" href="../css/responsive.css">

</head>

<body>
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                               <h6></h6>
                
            </div>
        </div>
    </div>


    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area bg-img background-overlay-white" style="background-image: url(../img/bg-img/bg-1.jpg);">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    <a href="#"><img src="../img/core-img/logo.png" alt=""></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            
        </header>
        <!-- ****** Header Area End ****** -->

        <!-- ****** Top Discount Area Start ****** -->
       <section>



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

<center><h2>Connexion</h2>


<form class="modal-content animate" style="width: 28em" id="form1" name="form1" method="POST" action="http://localhost/tryyyy/views/front_office/nour/client/authentification/connexion.php">

    <div class="imgcontainer">
      <a href="../../../cart.html"><span onclick="document.getElementById('id01').style.display='block'" class="close" title="Close Modal">&times;</span></a>
      <img src="../img/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
<label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="email" id="email" name="email" value="" placeholder="       nom.prenom@esprit.tn"  required placeholder="" ><br><br>


     <label for="fname"><img src="pwd.png" style="height: 20px;width: 20px">Mot de passe</label>
      <input style="border:0.5px solid #b2b2b2; border-radius: 5px; width: 350px; height: 50px" type="password" placeholder="Mot de passe" name="pwd" id="pwd" value="" required placeholder="" required>

        <label style="width: 25em"> <input type="checkbox" checked="checked" name="remember" class="remem"> Se souvenir de moi </label> 
        <label> <a href="" style="color:#ff0066;"  >Mot de passe oublié?</a> </label>

      
          <div class="container" style="background-color:#f1f1f1">
            <div class="col"><input class="btn" type="submit" name="mailform" id="button" value="Se connecter" /></div>
            
                 <a href="../../../cart.html"><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="width: 285px;border-radius: 3px">Annuler</button>
                     </div></a>
    </div>


    <div class="bottom-container" style="background-color:white">
  <div class="row" >
    <div class="col" >
      <label>Vous n'avez pas de compte?</label>
      <a href="http://localhost/tryyyy/views/front_office/nour/client/authentification/creer_compte.php" style="color:white" class="btn">S'inscrire</a>
    </div>
  </div>
</div>
  </form>




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

</section>
</center>
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