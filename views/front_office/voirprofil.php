
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  ?>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "projet");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">

<head>

<?php
include "head.php";
?>


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

                <h6>Mon compte</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Profil <span class="arrow"></span></a>

                        <ul class="sub-menu collapse" id="women">
                            <li><a href="voirprofil.php">Voir le profil</a></li>
                            <li><a href="modifier.php">Modifier les paramètre</a></li>
                        </ul>
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
                <div style="margin-left: 2em" >



<?php
 
// On récupère nos variables de session
if (isset($_SESSION['e']) && isset($_SESSION['p'])) 
{ 

     echo '<img style="width:150px;height:70px" src="img/bienvenue.jpg" alt="Bienvenue" >' ;
     echo '<a  href="http://localhost/tryyyy/views/front_office/nour/client/authentification/se_connecter.php"><img style="margin-left:2em; width:30px; height:30px" src="img/deconnexion.png" alt="Deconnexion"> </a>';
     echo '<br> <b style="margin-left:4em;color:firebrick;">'.$_SESSION['n'].'</b> <b>'.$_SESSION['pr']; 
    

}

?>
                                                         </div>
               







<?php
include "header1.php";
?>


        <section class="welcome_area">
            <div >
                <!-- Single Slide Start -->
                <div >
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="welcome_slide_text">
                                   


  

<?php
 
// On récupère nos variables de session
if (isset($_SESSION['e']) && isset($_SESSION['p'])) 
{ ?>


<div >
    <?php
echo '<img style="width:300px;height:300px; border-radius:25em;" src="img/profil.jpg" alt="profile picture" > <br> ';
echo '<div style="position: absolute;bottom: 8px;"></div>'
?>
  
</div>
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" />   
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  

                

                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" style="border-radius:25em; margin-top:35em;" width="300" class="img-thumnail" />  ';  

                     ?>
                     <div style=" padding: 0px;margin-right: 160px;margin-bottom: 20em; margin-left: 160px; background-image: url(img/background.jpg);">
                        <?php
                         echo '<h2><br> <b style="margin-left:4em;color:firebrick;">Nom :'.$_SESSION['n'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Prénom :'.$_SESSION['pr'].'</b> <b></h2>'
                         .'<h2><br> <b style="margin-left:4em;color:firebrick;">Email :'.$_SESSION['e'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Adresse :'.$_SESSION['a'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Numéro :'.$_SESSION['num'].'</b> <b></h2> <br> <br> '; 
                         ?>
                     </div>
                     <?php
                }  
                ?>   

<div style=" padding: 0px;margin-right: 160px;margin-bottom: 20em; margin-left: 160px; background-image: url(img/background.jpg);">

           <?php
     echo '<h2><br> <b style="margin-left:4em;color:firebrick;">Nom :'.$_SESSION['n'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Prénom :'.$_SESSION['pr'].'</b> <b></h2>'
                         .'<h2><br> <b style="margin-left:4em;color:firebrick;">Email :'.$_SESSION['e'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Adresse :'.$_SESSION['a'].'</b> <b></h2>'.'<h2><br> <b style="margin-left:4em;color:firebrick;">Numéro :'.$_SESSION['num'].'</b> <b></h2><br> <br>'; 
    ?>

</div>
<?php

}

?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
        </section>
        <!-- ****** Welcome Slides Area End ****** -->

        <!-- ****** Popular Brands Area End ****** -->

        <!-- ****** Footer Area Start ****** -->



<?php
include "footer.php";
?>

</body>

</html>