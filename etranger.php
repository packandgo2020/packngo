<?php 
session_start();
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
      <?php include "navbar.php"?>
    </header>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/logement.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             
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
                    <section>  
                        <h4>Trouver un hôtel</h4>
                             
                          
                          <h2> 
                            <i>  Pour votre séjour dans le monde</i>
                          </h2>
                          <h3 class="titre-descriptif"> Veuillez remplir le formulaire suivant. </h3>
                          <p>         
                            Vous avez une envie de découverte d'un pays ou d'une ville dans le monde,
                      vous avez tout planifié et vous cherchez l'hébergement adéquat ? Pack and Go
                       met à votre disposition un choix large d'hôtels partout dans le
                      monde. Remplissez le formulaire et nous trouverons pour vous l'hébergement
                      qui vous convient.
                         </p>
                        </section>
                        <label>Votre ville de destination </label>
                        <br>
                
                        <input type="text" name="ville" placeholder="Ville" class="controle" id="ville" required="">
                        <br>
                        <label>Du</label>
                        <br>
                        <input type="date" name="datedepart" class="controle" id="datedepart" required="">
                        <br>
                        <label>Au</label>
                        <br>
                        <input type="date" name="datearrive" class="controle" id="datearrive" required="">
                        <br>
                        <label>Votre nom et prénom</label>
                        <input type="text" name="nompre" placeholder="Nom" class="controle" id="nompre" required="">
                        <br>
                        <label>Nombre de personnes</label>
                        <input type="text" name="per" placeholder="Nombre" class="controle" id="per">
                        <br>
                        <label>Votre email</label>
                        <input type="email" name="email" placeholder="Email" class="controle" id="email">
                        <label>Votre téléphone</label>
                        
                        <input type="text" name="tel" placeholder="Téléphone" class="controle" id="tel" required="">
                        <br>
                        <label>Demande détaillée </label>
                        
                        <input type="textarea" name="commentaire" placeholder="Commentaire" class="controle" id="commentaire">
                        <br>
                        <button type="submit" ><a class="filled-button">Envoyer </a></button>
                  </div>
                  <div class="col-lg-4 col-md-6 text-right">
                   <!--<a href="contact.html" class="filled-button">Contact Us</a>--> 
                  
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