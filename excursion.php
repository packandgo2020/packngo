


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
                  
                </div>
                <h4>Rechercher Un Circuit </h4>
                <form name="fo" action="search.php" method="POST">
                <table>
                <tr>
                  <td>Destination</td>
                  
                </tr>
                <tr>
                  <td >
                    <div >
                      <select id="dest" name="dest" >
                        <option value="w">--------</option>
                      <option value="s">Sud</option>
                      <option value="n">Nord</option>
                        
                        
                      </select>
                      </div>
                     </td>
                </tr> 
                <tr>
                  <td>Depart</td>
                </tr> 
                <tr>
                  <td>
                    <div>
                      <input type="date" name="dep" id="dep" required >
                      </div>
                     </td>
                </tr> 

                <tr><td> <button type="submit" name="btn" style="border: none;background: none" ><a class="filled-button" href="search.php">Rechercher</a></button></td></tr>
        
                  
                <!-- <input type="submit" value="rechercher" name="btn" onclick="fonction()"><a> </a></input>    -->   

                </table>
              </form>
               <!-- <button type="submit" name="btn" style="border: none;background: none" ><a class="filled-button" href="#">Rechercher</a></button>-->
              
                
             
             
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
   <script>
     function fonction()
     {
      var k=document.getElementById("dest").value;
      var t=document.getElementById("date").value;
    
       if(k=="w")
       {
           alert("veuillez indiquer votre destination");
       }
       else if (t===null)
       {
         alert("veillez indiquer une date");
       }
      
       
     }
     
     
   </script>



  </body>
</html>