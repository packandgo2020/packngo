



<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body>
<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>
</div>

<?php include "header.php"?>
<?php include "navbar.php"?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Basic</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Decembre 2020
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Gestion Des Logements</h4>
                        <p class="mb-30"></p>
                    </div>

                </div>
              
            </div>
            <!-- Default Basic Forms End -->

            <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                <div class="pull-left">
							<h4 class="text-blue h4">Ajouter  Logement</h4>
							<button><a href="gestionlogement.php">retour</a></button>
                            
						</div>

                </div>
             
                <div id="error">
            
            </div>
                    <form  method="POST" action="ajout.php"  enctype="multipart/form-data">
                    <table class="table table-bordered">
    
                    <thead>
                  <tr>
    
                    <th scope="col">destination</th>
                    <th scope="col">Hotel</th>
                    <th scope="col">Arrivee</th>
                    <th scope="col">type</th>
                    <th scope="col">Depart</th>
                    <th scope="col">avatar</th>
    
                  </tr>
                    </thead>
    <tbody>
    <tr>
    
    
                        <td><input type="text" name="dest" id="dest" ></td>
                  
                        <td>  <input type="text" name="hotel" id="hotel" required ></td>
                  
                        <td>
                            <input type="date" name="arrivee" id="arrivee" >
                        </td>
              <td>
              <label for="typee">Choose a car:</label>
      <select name="typee" id="typee">
        <option value="etranger">etranger</option>
        <option value="tunis">tunisie</option>
     
      </select>               
      </td>     
                        <td>  <input type="date" name="depart" id="depart" ></td>
                   
          <td>		<input   type="file"    id="avatar" name="avatar"   accept="image/png, image/jpeg" > </td>
                   
                        <td>
                            <input type="submit" name="btn" value="Envoyer" > 
                        </td>
                        <td>
                            <input type="reset" value="Annuler"  >
                        </td>
                    </tr>
    
    
    
    </tbody>
                    
    
    
    
    
                    </table> 
                    </form>     

                 


                    </div>
                </div>
            </div>
            <!-- basic table  End -->

        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
