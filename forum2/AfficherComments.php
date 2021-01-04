<?php 

include "CommentsC.php";



 session_start(); 
 if (empty($_SESSION['id']))
 {
     echo "<script type='text/javascript'>";
echo "alert('Please Login First');
window.location.href='login.html';";
echo "</script>";
    

 }
 if (isset($_GET['id'])){

    $CommentsC=new CommentsC();
  $listeComments=$CommentsC->afficherlist_comments($_GET['id']); 

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
                <section id="blog" class="blog">
      <div class="container">
        <div class="blog-details">
            <div class="gallary-header text-center">
              <h2>
                comments
              </h2>
          
            </div><!--/.gallery-header-->
            <div class="blog-content">
                        <form onsubmit="return validateForm()" name="myForm" method="POST" action="AjouterCommentC.php" >
          <div class="row">
                         <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                    
                  
                             
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="contenu"  id="contenu" placeholder="contenu *"  ></textarea>
         <input class="form-control" value="<?php echo $_GET['id'] ?>" name="id_form" type="hidden"   />
                  
                            </div>


                            <br>
                          
                        
                          
                            
                                <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                    </div>
                        </div>

                       
                    </div>

          </div>
        </form>
                        <script>

function validateForm() {

  
    var contenu = document.forms["myForm"]["contenu"].value;


    if (contenu == "") {
    alert("contenu vide");
    return false;
  }



 
    
}
</script>
                    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              <div class="row">
<?php foreach($listeComments as $row) {  

  ?>
                <div class="col-sm-4 col-md-4">
                  <div class="thumbnail">
                 
                    
                    <div class="caption">
                      <div class="blog-txt">
                        <h3>
                          <a href="#">
                             Ecrite par   <?php echo $row->nom." ". $row->prenom ?>
                          </a>
                        </h3>
                        <p>
                        <?php echo $row->contenu ?>
                        </p>
                        <?php if ($_SESSION['id'] == $row->id_User ) { ?>
                        <form method="POST" action="DeleteComments.php">



                                  
  <button  class="btn btn-danger">
               <i class="fa fa-trash"></i>
                    </button>
    <input type="hidden" value="<?PHP echo $row->id; ?>" name="id">       


  </form>
   
                                  
  <button  class="btn btn-warning" style="
    margin-left: 254px;
    margin-top: -38px;
" >
             <a style="color: white" href="ModifierComment.php?id=<?PHP echo $row->id; ?>"><i class="fa fa-edit"></i></a>
                    </button>

                  
             

<?php } ?>
                        
                      </div><!--/.blog-txt-->
                    </div><!--/.caption-->
                  </div><!--/.thumbnail-->

                </div><!--/.col-->

       <?php } ?>   

              </div><!--/.row-->
            </div><!--/.blog-content-->
          </div><!--/.blog-details-->
        </div><!--/.container-->

    </section><!--/.blog-->  
               
             
         

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