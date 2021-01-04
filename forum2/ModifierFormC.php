<?php 

include 'form.php';
include 'FormC.php';



if( isset($_POST['image']) and isset($_POST['titre']) and isset($_POST['contenu']) and isset($_POST['likes']) and isset($_POST['Date']) and isset($_POST['id']))
{
session_start();
	
$form = new form(0,$_POST['titre'],$_POST['image'],$_POST['contenu'],$_POST['likes'],$_POST['Date'],$_SESSION['id']);
	

	$FormC=new FormC();
	$FormC->modifierform($form,$_POST['id']);
	header('Location: AffichermesForms.php');
}
else{
	echo "verifier les champs";
}

 ?>