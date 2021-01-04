<?php 

include 'comments.php';
include 'commentsC.php';



if( isset($_POST['id_form']) and isset($_POST['contenu']) )
{
session_start();
	
$comments = new comments(0,$_POST['contenu'],$_POST['id_form'],$_SESSION['id']);
	

	$commentsC=new commentsC();
	$commentsC->ajouterComments($comments);
	header('Location: AfficherComments.php?id='.$_POST['id_form']);
}
else{
	echo "verifier les champs";
}

 ?>