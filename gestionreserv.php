

<?PHP
	include "../logement/logementC.php";

	$logC=new LogementC();
	$liste=$logC->afficherLogement();

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
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Gestion Des Logements</h4>
						</div>
						
						<button><a href="ajouterlogement1.php">Ajouter un logement</a></button>
					</div>
				</div>
            <!-- Default Basic Forms End -->

            <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                <div class="pull-left">
							<h4 class="text-blue h4">Tableau Des logement</h4>
						</div>

                </div>
             
              	<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Id reservation</th>
								<th scope="col">id log</th>
								<th scope="col">chambre</th>
								<th scope="col">arrivee</th>
								<th scope="col">depart</th>
								<th scope="col">note</th>
								<th scope="col">nombre nuit</th>



							</tr>
						</thead>
						<tbody>
                        <?php
$conn=mysqli_connect("localhost","root","","projetweb-1");
$result=$conn->query("SELECT * FROM `reservationlog` WHERE 1") or die ($mysqli->error) ;
while ($row=$result->fetch_assoc()):
?>
				<tr>
					<td><?PHP echo $row['idreservation']; ?></td>
					<td><?PHP echo $row['idlog']; ?></td>
					<td><?PHP echo $row['chambre']; ?></td>
					<td><?PHP echo $row['arrivee']; ?></td>
					<td><?PHP echo $row['depart']; ?></td>
					<td> <?PHP echo $row['note']; ?> </td>
					<td><?PHP echo $row['nbnuite']; ?></td>

					<td>
                    <a href="supprimerrez.php?id=<?PHP echo $row['idreservation']; ?>"> supprimer </a>

						
					</td>
					<td>
						<a href="modifierlogement2.php?id=<?PHP echo $row['idreservation']; ?>"> Modifier </a>
					</td>
				</tr>
			  
<?php
endwhile;
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
