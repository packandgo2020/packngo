<?php
    include "utilisateurC.php";
    include_once 'utilisateur.php';

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
            
            $utilisateurC->modifierUtilisateur($user, $_GET['id']);
           // header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Utilisateur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$user = $utilisateurC->recupererUtilisateur($_GET['id']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user['nom']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user['prenom']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user['email']; ?>">
                    </td>
                </tr>
                <td> Date de naissance</td>
<td> <input type="date" name="date" id="madate" value = "<?php echo $user['sexe']; ?>"  required > </td>
<tr align ="center">
    <td>Sexe</td>
    <td> Homme : <input type="radio" name="sexe" value="Homme" value = "<?php echo $user['sexe']; ?>" required   > Femme : <input type="radio" name="sexe" value="Femme"> Autre : <input type="radio" name="sexe" value="autre"> </td>
    <tr align ="center">
<td> Telephone :</td>
<td> <input type="phone" name="telephone" placeholder="12-345-678" value = "<?php echo $user['telephone']; ?>" required > </td>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" value = "<?php echo $user['login']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="password" id="pass" value = "<?php echo $user['password']; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>