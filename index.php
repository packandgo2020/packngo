<?php 
session_start();

include "utilisateurC.php";
$userc= new utilisateurC();
if(!empty($_SESSION['e']))
{
$_SESSION['id']=$userc->recupererUtilisateur1($_SESSION['e']);
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
<script> 

</script>
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
<?php 
             
             ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>A Symbol Of Freedom</h4>
            <h2>A More Rewarding Way To Travel</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>A Different Light</h4>
            <h2>A New Point Of Vue</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>A World To See</h4>
            <h2>A New Pulse Of Dream</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Vacations</h2>
             <!-- <a href="packages.html">view more <i class="fa fa-angle-right"></i></a>-->
              <a>view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
             <!--<a href="package-details.html"><img src="C:\Users\user\Desktop\travel-agency-website-template\istanbul.jpg" alt=""></a>--> 
             <a><img src="C:\wamp64\www\packngo\assets\images\istanbul.jpg" alt=""></a>
              <div class="down-content">
                <a href="package-details.html"><h4>Istanbul</h4></a>

                <h6>From 1600TND</h6>

                <p>Prepare your stay in Istanbul: find all the information to prepare your trip. All the good tourist and local plans to have a great stay: places to visit, monuments, excursions, activities, ...</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 6 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
             <!--<a href="package-details.html"><img src="C:\Users\user\Desktop\travel-agency-website-template\maldive.jpg" alt=""></a>--> 
             <a><img src="C:\wamp64\www\packngo\assets\images\maldive.jpg" alt=""></a>
              <div class="down-content">
                <a href="package-details.html"><h4>Maldives</h4></a>

                <h6>From 2000TND</h6>

                <p>The Maldives is arguably the ideal destination for a memorable honeymoon. If you dream of tropical places and magnificent beaches and the scenery of postcards fascinates you, this is the Maldives that you must go to, a stay in the Maldives can only amaze you.</p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 6 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
             <!--<a href="package-details.html"><img src="C:\Users\user\Desktop\travel-agency-website-template\douze.jpg" alt=""></a>--> 
             <a><img src="C:\wamp64\www\packngo\assets\images\douze.jpg" alt=""></a>
              <div class="down-content">
                <a href="package-details.html"><h4>Southern Tunisian Tours</h4></a>

                <h6>From 60TND</h6>

                <p>Climb aboard a camel for an unforgettable desert ride on this Saharan safari at sunrise or sunset. Discover stunning off-road sites in Tunisia's vast deserts, including secluded palm groves and lush village oases.

                  </p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 3 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     
                </small>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
             <!-- <a href="package-details.html"><img src="C:\Users\user\Desktop\travel-agency-website-template\sejour.jpg" alt=""></a>--> 
             <a><img src="C:\wamp64\www\packngo\assets\images\sejour.jpg" alt=""></a>
              <div class="down-content">
                <a href="package-details.html"><h4>
                  Go on a language study trip to Cambridge with Pack 'N' Go</h4></a>

                <h6>From 4000TND</h6>

                <p>By signing up for a language study trip to Cambridge, you will have the privilege of studying English in one of Britain's most traditional university towns. In this university campus swarming with students, you will perfect your language skills by interacting daily with a dynamic community. You will go down the river by boat or take part in a cricket match. Art lovers will not forget the Kettle's Yard gallery, which houses a number of avant-garde British paintings and sculptures. Cambridge also hosts the annual Midsummer Fair, which dates back to 1211. A language study trip to Cambridge is an admirable encounter with history and modernity.

                  </p>

                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 30 Days</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>we are a group of students mixed of engineering's , business , and graphique designers that aim to start a new Start Up which is  A new travel agency
              </p>
              
             <!--<a href="about-us.html" class="filled-button">Read More</a>--> 
             <a  class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="C:\wamp64\www\packngo\assets\images\students.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

             <!-- <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>--> 
             <a>read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">I recommend this agency with competent staff</a></h4>

                <p style="margin: 0;"> Joe Gomez &nbsp;&nbsp;|&nbsp;&nbsp; 26/06/2020 12:00 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">خدمات ممتازة ذات  جودة عليا </a></h4>

                <p style="margin: 0;"> NAbil Zeidi &nbsp;&nbsp;|&nbsp;&nbsp; 10/02/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Always very satisfied with the services of Voyageurs du Monde. A very good adaptation to our desires.</a></h4>

                <p style="margin: 0;"> Anne Sophie &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 15:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

             <!-- <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>--> 
             <a>read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jad Smith</h4>
                  <p class="n-m"><em>"A breathtaking trip with sensational landscapes, a large number of animals observed, a top-notch course and accommodation thanks to Voyageurs du Monde who knew how to meet our expectations. We can only recommend this destination!"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Steph Curry</h4>
                  <p class="n-m"><em>"We shared authentic and unforgettable moments with the people there and had great experiences."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"With Pack N Go, it's more than a trip, it's a series of great experiences, always local, moments, places, discussions that we will remember for a very long time."</em></p>
                </div>
              </div>
              
              <!--<div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>-->
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
                  <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":528,"width":803,"zoom":17,"queryString":"Esprit School of Business, Tunisie","place_id":"ChIJG29cXnTL4hIRLsFlPO5RmvY","satellite":false,"centerCoord":[36.89796951192239,10.189833850000012],"cid":"0xf69a51ee3c65c12e","lang":"fr","cityUrl":"/tunisia/tunis-4563","cityAnchorText":"Carte de Tunis, Tunisia 2, Tunisie","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"334485"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=334485';
                        s.async = true;
                        s.onload = function (e) {
                          window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                      })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>
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