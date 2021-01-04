<?php
session_start();
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
            
            $utilisateurC->modifierUtilisateur($user,$_SESSION['id']);
           // header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\user\Desktop\travel-agency-website-template\LOGO.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PACK 'N' GO</title>
    <style>
 #heading { color: #FFA500; }  </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

  <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
    <?php if(!empty($_SESSION['e']))
     include "navbar2.php";
      else include "navbar.php"; 
      ?>
    </header>

    <!-- Page Content -->
   <!-- Banner Starts Here -->
   <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-khalil1">
        <div class="text-content">
        <h2 id="heading">Modifier Votre Compte </h2>
         
        </div>
      </div>
     
    </div>
  </div>
  <!-- Banner Ends Here -->
  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
              <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			
				$user = $utilisateurC->recupererUtilisateur($_SESSION['id']);
				
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
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php  echo $user['prenom']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php  echo $user['email']; ?>">
                    </td>
                </tr>
                <td> Date de naissance</td>
<td> <input type="date" name="date" id="madate" value = "<?php echo $user['date']; ?>"  required > </td>
<tr align ="center">
    <td>Sexe</td>
    <td> Homme : <input type="radio" name="sexe" value="Homme" value = "<?php echo $user['sexe']; ?>" required   > Femme : <input type="radio" name="sexe" value="Femme"> Autre : <input type="radio" name="sexe" value="autre"> </td>
    <tr align ="center">
<td> Telephone :</td>
<td> <input type="phone" name="telephone" placeholder="12-345-678" value = "<?php  echo $user['telephone']; ?>" required > </td>
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
                        <input type="password" name="password" id="pass" value = "<?php echo $user['password'];?>">
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
		
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>
                    A Stay, a Trip or Honey Moon ... that's for sure with Pack 'N' Go</h4>
                  <p><a href="gmail.com"></a>packngo@gmail.com</p>
                  <p><a href="https://www.facebook.com/packandgo"></a>Facebook</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                 <!--<a href="contact.html" class="filled-button">Contact Us</a>--> 
                 <a  class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Pack 'N' Go  <a href="https://www.facebook.com/packandgo"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
   

  </body>
</html>