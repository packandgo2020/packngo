<?php 

include 'comments.php';
include 'CommentsC.php';



if(  isset($_POST['contenu']) and isset($_POST['id_Form'])  and isset($_POST['id']))
{
session_start();
	$comments = new comments(0,$_POST['contenu'],$_POST['id_Form'],$_SESSION['id']);
	

	$commentsC=new commentsC();
	$commentsC->modifierComments($comments,$_POST['id']);
	header('Location: AfficherComments.php?id='.$_POST['id_Form']);
}
else{
	echo "verifier les champs";
}

 ?>