<?php 

include 'form.php';
include 'FormC.php';



if( isset($_POST['image']) and isset($_POST['titre']) and isset($_POST['contenu']) )
{
session_start();
	
$form = new form(0,$_POST['titre'],$_POST['image'],$_POST['contenu'],0,date("Y-m-d"),$_SESSION['id']);
	

	$FormC=new FormC();
	$FormC->ajouterform($form);
	header('Location: AfficherForms.php');
}
else{
	echo "verifier les champs";
}

 ?>