<?php
session_start();
include "excursion/CircuitC.php";

$cirC=new CircuitC();

$listeCirc=$cirC->afficherCircuitSud();
if(!empty($_SESSION['c']))
{
if($_SESSION['c'])
{$_SESSION['c']=false;
  echo '<body onLoad="alert(\'Votre reservation a été envoyée\')">'; 
  
}
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
    <header>
    <?php if(!empty($_SESSION['e']))
     include "navbar2.php";
      else include "navbar.php"; 
      ?>
    </header>

    <!-- Page Content -->
   <!-- Banner Starts Here -->
   <div class="page-heading about-heading header-text" style="background-image: url(assets/images/tunisie.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>A Partir De 60TND</h4>

            <h2>L'Une Des Meilleurs Excursion De Ta Vie</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->
  <div class="call-to-action" background="C:\wamp64\www\packngo\assets\images\suda.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-md-8">
                
                <div class="col-md-6">

                <h4>Le Programme De <?php
echo date("F")?></h4>
                <form  method="POST" action="excursion/ajoutreservation.php">
                <table class="table" align = 'center'>
		
        <tr>
        <th scope="col">Destination</th>
            <th scope="col">Date</th>
            <th scope="col" >Information</th>
            <th scope="col">Prix Pour Adultes</th>


            
        </tr>

        <?PHP
            foreach($listeCirc as $circ){
        ?>
            <tr>
               
                <td><p><?PHP echo $circ['destination']; ?></p></td>
                <td><?PHP echo $circ['depart']; ?></td>
                <td ><?PHP echo $circ['information']; ?></td>
                <td><?PHP echo $circ['tarif']; ?>DT</td>

                <td><button  name="btn" id="btn" onclick="imprimer()"><a  class="filled-button" href="excursion/ajoutreservation.php?id=<?php echo $circ['id'];?>" >Reserver</a></td>
               

            </tr>
        <?PHP
            }
        ?>
    </table>
          </form>
          <SCRIPT LANGUAGE="JavaScript">
function popup() {
w=open("",'popup','width=400,height=200,toolbar=no,scrollbars=no,resizable=yes');
w.document.write("<BODY>");
w.document.write("Nom: "+document.getElementById("nom").value+"<BR><BR>");
w.document.write("Prénom: "+document.getElementById("prenom").value+"<BR><BR>");
w.document.write("Courriel: "+document.getElementById("email").value+"<BR><BR>");
w.document.write("</BODY>");
w.document.close();
w.print();

}
</script> 
<script>


</script>

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