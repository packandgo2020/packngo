<?PHP
	include "CircuitC.php";

	$C=new CircuitC();
	
	if (isset($_POST["id"])){
		$C->supprimerReservation($_POST["id"]);
		header('Location:../dashboard/afficherReservation.php');
	}

?>