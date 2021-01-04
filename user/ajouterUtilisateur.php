<?php
    include_once 'utilisateur.php';
    include_once 'utilisateurC.php';

    $utilisateurC = new utilisateurC();
	$error = "";

	if (
        isset($_POST["nom"]) && 
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) && 
        isset($_POST["login"]) && 
        isset($_POST["password"]) &&
        isset($_POST["telephone"]) &&
        isset($_POST["sexe"]) &&
        isset($_POST["date"])
    ){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["prenom"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["login"]) && 
            !empty($_POST["password"]) &&
            !empty($_POST["telephone"]) && 
            !empty($_POST["sexe"]) && 
            !empty($_POST["date"]) 

        ) {
            echo  $_POST['telephone'] ;
            $user = new Utilisateur(
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['email'],
                $_POST['login'],
                $_POST['password'],
                $_POST['sexe'],
                $_POST['telephone'],
                $_POST['date']

            );
          if($utilisateurC->emailexiste($user->email))
            {
            $utilisateurC->ajouterUtilisateur($user);
            
            header('Location:afficherUtilisateurs.php');
        }
            else 
            {
                echo 'le mail existe';
                if(!empty($prenom)  && !empty($email)){
                    $query=$db->prepare("
                        INSERT INTO form(prenom, email)
                        VALUES(:prenom, :email)");
                        $query->bindParam(':prenom',$prenom);
                        $query->bindParam(':email',$email);
                        $query->execute();
                }


                header("location:".  $_SERVER['HTTP_REFERER']);

            }
        }
        else
            $error = "Missing information";
	}

?>