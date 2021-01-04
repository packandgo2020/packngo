<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\user\Desktop\travel-agency-website-template\LOGO.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
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
 









<br> 
<br>
<?php 
                                        $reservatione=$_GET['reser'];
                                         ?>
<form  style="margin: 0pt;"  action="ajout.php?resere=<?php echo $reservatione; ?>" method="POST">
                       
                        <table width="460" class="fckTable">
                            <tbody>
                                <tr>
                                    <td colspan="2"><strong>Demande de réservation<br />
                                    </strong></td>
                                </tr>
                                <tr>
                                    <td width="150">Chambre*</td>
                                    <td><select name="chambre" onblur="test1(this.value)">
                                    <option  selected="" value="select...">sélect...</option>
                                    <option value="simple">simple</option>
                                    <option value="double">double</option>
                                   <option value="triple">triple</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td width="150">Arrivée*</td>
                                    <td><input type="date" id="arrivee" style="width: 150px;" name="arrivee" onblur="test2()" /> </td>
                                </tr>
                                <tr>
                                    <td width="150">Départ*</td>
                                    <td><input type="date" id="depart" style="width: 150px;" name="depart"  onblur="test3()" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Notes</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" id="note"style="width: 500px; height: 100px;" name="notes" onblur="test4()"  />&#160;<input type="hidden" value="Contact direct" name="formTitle" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">nombre de nuit</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="text" id="nb" name="nbnuit" onblur="test4()"/>&#160;<input type="hidden" value="Contact direct" name="formTitle" /></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><input type="submit" name="reservation" style="float: right;" value="Envoyer" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>















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
  function test1(t)
  {
    
    if (t.value == "select...")
    {
      alert("veuillez selectionner type de chambre");
    }
  }
  function test2()
  {
    var x=document.getElementById("arrivee").value;
    if (x.length==0)
    {
      alert("entrer une date d arrivee");
    }

  }
  function test3()
  {
    var y=document.getElementById("depart").value;
    if (y.length==0)
    {
      alert("entrer une date de depart");
    }

  }
  function test4()
  {
    var y=document.getElementById("note").value;
    if (y.length==0)
    {
      alert("entrer une note");
    }

  }
  function test3()
  {
    var y=document.getElementById("nb").value;
    if (y.length==0)
    {
      alert("entrer nombre de nuit");
    }

  }
  </script>

  </body>
</html>
