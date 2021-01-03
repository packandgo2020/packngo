<?PHP
	include "CircuitC.php";

	$C=new CircuitC();
	
	if (isset($_POST["id"])){
		$C->supprimerCircuit($_POST["id"]);
		header('Location:../dashboard/gestioncircuit.php');
	}

?>