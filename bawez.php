<?PHP
	include "utilisateurC.php";

	$utilisateurC=new utilisateurC();

	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>
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
                        <h4 class="text-blue h4">LISTE DES CLIENTS</h4>
                        <p class="mb-30"></p>
                    </div>

                </div>
               

            </div>
            <!-- Default Basic Forms End -->

            <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Destination Table</h4>
                        <p></p>
                    </div>

                </div>
                <table class="table">
                    <thead>
                    <tr>
                    <th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
                <th>Login</th>
                <th>Password</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Date</th>
				<th>supprimer</th>
				<th>modifier</th>

                    </tr>
                    </thead>
                    <tbody>
                  
			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['id']; ?></td>
					<td><?PHP echo $user['nom']; ?></td>
					<td><?PHP echo $user['prenom']; ?></td>
					<td><?PHP echo $user['email']; ?></td>
                    <td><?PHP echo $user['login']; ?></td>
                    <td><?PHP echo $user['password']; ?></td>
                    <td><?PHP echo $user['telephone']; ?></td>
                    <td><?PHP echo $user['sexe']; ?></td>
                    <td><?PHP echo $user['date']; ?></td>


					<td>
						<form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierUtilisateur.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
					</td>
</tr>
<?PHP
				}
			?>
                    </tbody>
                </table>


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
