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
                        <form method="post" action="envoyer.php"></form>
                        <div id="reservation">
                            <fieldset>
                                <h4>destination de l'hotel</h4>
                                <p>
                                    <input type="radio" name="Type_location" value="Hammamet" id="HAmmamet" /> <label for="HAmmamet">Hammamet</label>
                                    <input type="radio" name="Type_location" value="Sousse" id="SOusse" /> <label for="SOusse">Sousse</label>
                                    <input type="radio" name="Type_location" value="Djerba" id="DJerba" /> <label for="DJerba">Djerba</label>
                                    <input type="radio" name="Type_location" value="Tunis" id="TUnis" /> <label for="TUnis">Tunis</label>
                                    <input type="radio" name="Type_location" value="Gammarth" id="GAmmarth" /> <label for="GAmmarth">Gammarth</label>
                                    <input type="radio" name="Type_location" value="Tabarka" id="TAbarka" /> <label for="TAbarka">Tabarka</label>
                                    <input type="radio" name="Type_location" value="Monastir" id="MOnastir" /> <label for="MOnastir">Monastir</label>
                                    
                                </p>
                                <span id="Label_DefaultDestination" class="cr_title1">Destination </span>
                                <input name="txtDestination" type="text" id="txtDestination" class="txtDestination" autocomplete="off" onkeyup="clearSelection();getData(event);" tabindex="1">
                                <span id="Label_HotelName" class="cr_title1">Nom de l'hôtel</span>
                                <input name="TextBox_HotelName" type="text" value="vous pouvez saisir juste quelques lettres" maxlength="20" id="TextBox_HotelName" onfocus="clearinput(this, ToolTip);SelectAll(this.id);" onblur="setinput(this, ToolTip);">
                                <p>
                                    <label for="jour_arrivee">Jour d'arrivée :</label>
                                    <select name="jour" id="jour">
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                      <option value="07">07</option>
                                      <option value="08">08</option>
                                      <option value="09">09</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                      <option value="21">21</option>
                                      <option value="22">22</option>
                                      <option value="23">23</option>
                                      <option value="24">24</option>
                                      <option value="25">25</option>
                                      <option value="26">26</option>
                                      <option value="27">27</option>
                                      <option value="28">28</option>
                                      <option value="29">29</option>
                                    </select>
                                    <select name="mois" id="mois">
                                      <option value="Janvier">Janvier</option>
                                      <option value="Fevrier">Fevrier</option>
                                      <option value="Mars">Mars</option>
                                      <option value="Avril">Avril</option>
                                      <option value="Mai">Mai</option>
                                      <option value="Juin">Juin</option>
                                      <option value="Juillet">Juillet</option>
                                      <option value="Aout">Aout</option>
                                      <option value="Septembre">Septembre</option>
                                      <option value="Octobre">Octobre</option>
                                      <option value="Novembre">Novembre</option>
                                      <option value="Decembre">Decembre</option>
                                    </select>
                                    <select name="annee" id="annee">
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </p>         
                                <p>
                                    <label for="jour_arrivee">Jour de départ :</label>
                                    <select name="jour" id="jour">
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                    </select>
                                    <select name="mois" id="mois">
                                        <option value="Janvier">Janvier</option>
                                        <option value="Fevrier">Fevrier</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                        <option value="Juillet">Juillet</option>
                                        <option value="Aout">Aout</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Decembre">Decembre</option>
                                          
                                    </select>
                                    <select name="annee" id="annee">
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </p> 
                                <button type="submit" ><a class="filled-button">Rechercher </a></button>
                               <!-- <input class="cr_button-book HtlwwButtonSearch" id="Button_Search" onclick="javascript:GetHotelListV2('1063','1','1');" type="button" name="Button_Search" value="Rechercher">-->        
                            </fieldset>
                            <div class="eaKeep"><SCRIPT src="../../../third-parties/yav/js_compact/yav.js">&nbsp;</SCRIPT> <SCRIPT src="../../../third-parties/yav/js_compact/yav-config-fr.js">&nbsp;</SCRIPT> <SCRIPT>
                                var rules=new Array();
                                rules[0]='email|required|E-mail';
                                rules[1]='email|email|e-mail: Veuillez vérifier votre adresse e-mail ';
                                rules[2]='prenom|required|Prenom';
                                rules[3]='nom|required|Nom';
                                rules[4]='telephone|required|Telephone';
                                rules[5]='chambre|required|Chambre';
                                rules[6]='arrivee|required|Date d\'arrivée';    
                                rules[7]='depart|required|Date de départ';
                            
                                function swapDisplay (id){
                                    if (getStyleObject(id).display=='block'){
                                        hideCompById(id);
                                    } else {
                                        showCompById(id);
                                    }
                                }
                                
                            
                            </SCRIPT>
                            <form class="fckForm" style="margin: 0pt;" onsubmit="return performCheck('contactForm', rules, 'classic');" action="../../../iw/core/main/sendForm.jsp" name="contactForm">
                                <table width="460" class="fckTable">
                                    <tbody>
                                        <tr>
                                            <th colspan="4">Réservation</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><strong>Information personnelles<br />
                                            </strong></td>
                                        </tr>
                                        <tr>
                                            <td width="80">Prénom*</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="prenom" /></td>
                                            <td width="80">Nom*</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="nom" /></td>
                                        </tr>
                                        <tr>
                                            <td width="80">Ville</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="ville" /></td>
                                            <td width="80">Pays</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="pays" /></td>
                                        </tr>
                                        <tr>
                                            <td width="80">Téléphone*</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="telephone" />&#160;</td>
                                            <td width="80">Portable</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="portable" /></td>
                                        </tr>
                                        <tr>
                                            <td width="80">Fax</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="fax" /></td>
                                            <td width="80">E-mail*</td>
                                            <td>&#160;<input type="text" style="width: 150px;" name="email" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table width="460" class="fckTable">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><strong>Demande de réservation<br />
                                            </strong></td>
                                        </tr>
                                        <tr>
                                            <td width="150">Chambre*</td>
                                            <td><select name="chambre">
                                            <option selected="" value="select...">sélect...</option>
                                            <option value="simple">simple</option>
                                            <option value="double">double</option>
                                           <option value="triple">triple</option>
                                            </select></td>
                                        </tr>
                                        <tr>
                                            <td width="150">Arrivée*</td>
                                            <td><input type="text" style="width: 150px;" name="arrivee" /> (jj/mm/aa)</td>
                                        </tr>
                                        <tr>
                                            <td width="150">Départ*</td>
                                            <td><input type="text" style="width: 150px;" name="depart" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Notes</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="text" style="width: 500px; height: 100px;" name="notes" />&#160;<input type="hidden" value="Contact direct" name="formTitle" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                            <p>La réservation ne sera prise en compte qu'après une confirmation   téléphonique. Vérifiez le numéro de téléphone.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                         <td><button type="submit" ><a class="filled-button">Envoyer </a></button></td> 
                                            <!--<td colspan="4"><input type="submit" style="float: right;" value="Envoyer" /></td>-->
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            </div>
        
                    </section>








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