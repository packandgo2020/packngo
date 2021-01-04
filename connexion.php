<?php
session_start();
include_once 'utilisateur.php';
include_once 'utilisateurc.php';
$message="";
$userC = new utilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
         $_SESSION['e'] = $_POST["email"];

       $_SESSION['id']=$userC->recupererUtilisateur1($_POST["email"]);
         
         // on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
            
    header('Location:index.php');}

        else{
          echo "<script>alert(\"Email ou MDP incorrecte\")</script>";
          ;
        }}
    else
        $message = "Missing information";}
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

  <body background="C:\wamp64\www\packngo\assets\images\tour.jpg">

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
    
    <!-- Banner Ends Here -->
  
    <div class="call-to-action" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-md-8">
                   <h4>Connexion...</h4>
                   <form name="frmUser" method="post" action="">
   <div class="message">


    
    </div>
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center" class="tblLogin">
        <tr class="tableheader">
            <td align="center" colspan="2">Authentification</td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="email">Email:</label>
            </td>
            <td>
                <input type="text" name="email" placeholder="Email" class="login-input">
            </td>
        </tr>
        <tr class="tablerow">
            <td>
                <label for="password">Password:</label>
            </td>
            <td>
                <input type="password" name="password" placeholder="Password" class="login-input"></td>
        </tr>
        <tr class="tableheader">
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
        </tr>
    </table>
</form>
<div> <a href="mdpoublie.php">Mot De Passe oublié ? </a> </div>






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