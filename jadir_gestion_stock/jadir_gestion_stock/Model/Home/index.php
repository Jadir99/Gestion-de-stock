<?php
session_start();
// fournisseur
include ("../../menu/menu.php");
require_once ("../../Class/class_fournisseur.php");
$nbr_fournisseur=fournisseur::count_fournisseur();
//client


//Search THE SPLUTION of the problem !!!!!
// require_once ("../../Class/class_client.php");
// $clients=client::afficher_client();
// echo $nbr_client[0];
//commande
require_once ("../../Class/class_commande.php");
$nbr_commande=commande::count_commandes();
//achat
require_once ("../../Class/class_approvisionnement.php");
$nbr_achats=Approvisionnement::count_achats();

//detail (ligne de commande)
require_once ("../../Class/class_ligne_command.php");
$l3a9a=ligne_commande::count_money();



?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Home</title>

	<!-- Site favicon -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/style.css">

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
	
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="../../menu/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"><?= $_SESSION['username'];?> !</div>
						</h4>
						<p class="font-18 max-width-600">
                        Content de te revoir! Nous sommes ravis de vous revoir. C'est toujours formidable de voir des
                         visages familiers et de se tenir au courant de ce qui s'est passé dans votre vie. Que vous 
                         soyez absent pour une courte ou une longue période, il est toujours bon de revenir et d'être
                          entouré de personnes et de lieux familiers.
                        </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?=$nbr_fournisseur[0]?></div>
								<div class="weight-600 font-14">Contact fournisseur</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?=$nbr_achats[0]?></div>
								<div class="weight-600 font-14">Approvisionnement</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart3"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?=$nbr_commande[0]?></div>
								<div class="weight-600 font-14">Commandes d'achats</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?=$l3a9a[0]?> DHS</div>
								<div class="weight-600 font-14">Benefits</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					<?php if (!empty($_GET['hh'])) {
						?>
					<script>swal("welcome back! <?=$_SESSION['username']?>", "", "success");</script>
					<?php } ?>
	<!-- js -->
	<script src="../../../deskapp2-master/vendors/scripts/core.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/script.min.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/process.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/layout-settings.js"></script>
	<script src="../../../deskapp2-master/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/dashboard.js"></script>
</body>
</html>