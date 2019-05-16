<?php  
include "../../entities/pube.php";
include "../../core/pubC.php";
include "../../entities/jaime.php";
include "../../core/jaimeC.php";
if (isset($_POST['dislike'])){
	

header('Location: index.php');
}

else echo "non valide";

?>