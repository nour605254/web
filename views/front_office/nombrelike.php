<?php
include "../../core/blogC.php";
include "../../core/likeC.php";
include "../../entities/like.php";

include "C:/wamp64/www/tryyyy/entities/blog.php";
if(isset($_POST['done']))
{
	$blog1C=new blogC();
	$blog1C->nombrelike($_GET['id']);
	$like1=new likeC();
	$likee=new like(0,$_GET['id'],1);
	$like1->ajouterlike($likee);

	header('Location: blog.php');

}
else echo "non valide";
?>