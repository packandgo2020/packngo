
<?PHP
	include "UtilisateurC.php";
$user= new utilisateur();
	$utilisateurC=new utilisateurC();
	

	if (isset($_POST["id"])){
		$user=$utilisateurC->recupererUtilisateur2($_POST["id"]);
		$utilisateurC->ajoutercorbeille($user);
		$utilisateurC->supprimerUtilisateur($_POST["id"]);
		header('Location:afficherUtilisateurs.php');
	}

?>