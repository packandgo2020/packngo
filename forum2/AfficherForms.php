<?php 

include "FormC.php";
include "LikesC2.php";


 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='login.html';";
echo "</script>";
    

 }
 $FormC=new FormC();
 $LikesC=new LikesC();
$listeForms=$FormC->afficherlist_form(); 
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

                <section id="pack" class="packages">
      <div class="container">
        <div class="gallary-header text-center">
          <h2>
            Pubs
          </h2>
        
        </div><!--/.gallery-header-->
        <div class="packages-content">
               <button  class="book-btn" style="margin-left: 522px;margin-bottom: 15px;">
                <a href="AjouterForm.php" style="color: white">
                       Ajouter Pub
                </a>
                
                    </button>
                    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          <div class="row">
          
<?php foreach($listeForms as $row) { ?>

            <div class="col-md-4 col-sm-6">
              <div class="single-package-item">
                <img src="../img/<?php echo $row['image'] ?>" alt="package-place">
                <div class="single-package-item-txt">
                  <h3>Titre :  <span class="pull-right"><?php echo $row['titre'] ?></span></h3>
                  <div class="packages-para">
                    <p>
        
                      <span>

                        <i class="fa fa-angle-right"></i><?php echo $row['Date'] ?>
                      </span>
                       <i class="fa fa-angle-right">Ecrite par : </i><?php echo " ".$row['nom']." ".$row['prenom'] ?>
                    </p>
                    <p>
                     <?php echo $row['contenu'] ?>
                    
                     </p>
                  </div><!--/.packages-para-->
                  <div class="packages-review">
                    <p>
              
                      <span>Nbr Jaime : <?php echo $row['likes'] ?></span>
                    </p>
                  </div>

                  <div class="about-btn">
                    <button  class="about-view packages-btn">
                       <a style="color: white" href="AfficherComments.php?id=<?PHP echo $row['id']; ?>">Commenter</a>
                     
                    </button>
                  </div><!--/.about-btn-->

                  <?php if ($row['id_User'] == $_SESSION['id']) { ?>
                      <div style="margin-left: 264px;margin-top: -34px;"  >
                        <form method="POST" action="DeleteForm.php">



                                  
  <button  class="btn btn-danger">
               <i class="fa fa-trash"></i>
                    </button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       


  </form>
                  
                  </div><!--/.about-btn-->

                    <?php } ?>
                                <?php if ($row['id_User'] != $_SESSION['id']) { ?>




              <?php 


$l = $LikesC->recupererlikes($row['id'],$_SESSION['id']);
$nombre = $l[0]->nbr;
if ($nombre == '0')
{


                      ?>


                      <div style="margin-left: 240px;margin-top: -34px;" >
                        <form method="POST" action="AjouterLikeFormC.php">

    <button class="btn btn-danger">
                     <i class="fa fa-heart"> </i>
                    </button>

                                  

    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">       


  </form>
                  
                  </div><!--/.about-btn-->

                    <?php

}
                     } ?>
                </div><!--/.single-package-item-txt-->
              </div><!--/.single-package-item-->

            </div><!--/.col-->
<?php } ?>
            

          </div><!--/.row-->
        </div><!--/.packages-content-->
      </div><!--/.container-->

    </section><!--/.packages-->
             
         

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