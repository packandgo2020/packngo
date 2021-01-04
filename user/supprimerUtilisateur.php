
<?PHP
	include "utilisateurC.php";

	$utilisateurC=new utilisateurC();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerUtilisateur($_POST["id"]);
		header('Location:../dashboard/gestionuser.php');
	}

?>