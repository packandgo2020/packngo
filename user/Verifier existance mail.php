<?PHP
	include "UtilisateurC.php";

	$utilisateurC=new utilisateurC();
	
	if (isset($_POST["email"])){
        if($utilisateurC->MailClientExiste($_POST["email"]))
        {echo "<script>alert(\"la variable est nulle\")</script>";
            header('Location:afficherUtilisateurs.php');
	}

?>