<?PHP
	include "logementC.php";

	$C=new LogementC();
	
	if (isset($_POST["id"])){
		$C->supprimerLogement($_POST["id"]);
		header('Location:../dashboard/gestionlogement.php');
	}

?>