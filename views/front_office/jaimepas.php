<?php
session_start();
include "../../core/blogC.php";
include "../../core/likeC.php";
include "../../entities/like.php";

include "../../entities/blog.php";
if(isset($_POST['done']))
{
	$blog1C=new blogC();
	$blog1C->supprimerlike($_GET['id']);
	$like1=new likeC();
	$likee=new like(0,$_GET['id'],$_SESSION['user_id']);
	$like1->supprimerlike($likee,$_SESSION['user_id']);

	header('Location: blog.php');

}
else echo "non valide";
?>