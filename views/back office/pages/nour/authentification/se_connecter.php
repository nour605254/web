<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
<title>Ouerghemmi Optique | gérer  clients</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="../css/ajouter_admin.css" rel="stylesheet" type="text/css" />
        <link href="../css/connexion.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
 <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
<?php include("entete.php"); ?>
<span style="margin-right: 20%" class="login100-form-title p-b-70">
            Bienvenue
          </span>
      <div style="margin: auto; margin-bottom: 30%; max-height: 300" class="wrap-login100 p-t-85 p-b-20">


        <form class="login100-form validate-form" id="form1" name="form1" method="POST" action="http://localhost/tryyyy/views/back office/pages/nour/authentification/connexion.php" >
          
          <span class="login100-form-avatar">
            <img src="images/avatar-01.jpg" alt="AVATAR">
          </span>

          <div class="wrap-input100 validate-input m-t-85 m-b-35" >
            <input type="email"  name="email" id="email" value=""  placeholder="exemple@exemple.com" required placeholder="" class="input100"  >
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="inp" name="pwd" id="pwd" value="" required placeholder="" class="input100" type="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <input  type="submit" name="button" id="button" value="Se connecter" class="login100-form-btn">
              
          </div>

        </form>


      </div>
  

  <div id="dropDownSelect1"></div>
  



        
            <meta name="viewport" content="width=device-width, initial-scale=1">




<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

<script src="js/connexion.js">
</script>



            <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="js/connexion.js">
</script>




   <!--  <button type="button" class="btn" onclick="test();" >Connexion</button><br> -->


    <script src="js/ajouter_client.js">
</script>
    
   

  <span onclick="document.getElementById('id01').style.display='none'" class="lab" title="Close Modal">&times;</span>






<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "block";
  }
}



<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
            
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- T TABES SCRIPT -->
        <script src="../../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../../js/AdminLTE/app.js" type="text/javascript"></script>

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