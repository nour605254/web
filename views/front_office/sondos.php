<?php
include "../../entities/promotion.php";
include "../../core/promotionC.php";
if (isset($_GET['num_promotion'])){
    $promoC2=new promotionC();
    $result2=$promoC2->recupererpromotion($_GET['num_promotion']);
        foreach($result2 as $row){
        $promoC2->incrementationvupromotion($_GET['num_promotion'],$row['nbr_vue']+1);
    }
}
header('Location: promotion_remise.php?num_promotion='.$_GET["num_promotion"]);