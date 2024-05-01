
<?php
require_once ("../verification/verification.php");
require_once ("../../Class/class_all.php");     
extract($_GET);
include_once("../../menu/menu.php") ; 
$commandes=ALL::get_commande_detail($num_commande);
// var_dump($commandes);
// echo count($commandes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commande</title>
    <!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../../../deskapp2-master/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../../deskapp2-master/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../../deskapp2-master/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="../../../deskapp2-master/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/style.css">
</head>
<body>

	<div class="main-container" >
	
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<div class="invoice-wrap">
				
					<div class="invoice-box ">
					
    <button class="btn btn-outline-dark "  onclick="window.print()">PDF</button>
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Client Name</h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600"><?=$commandes[0]->__get("date_commande")?></strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600"><?=$num_commande?></strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5"><?=$commandes[0]->__get("prenom")?></strong></p>
									<p class="font-14 mb-5"><?=$commandes[0]->__get("nom")?></strong></p>
									<p class="font-14 mb-5"><?=$commandes[0]->__get("adresse")?></p>
									<p class="font-14 mb-5"><?=$commandes[0]->__get("tele")?></p>
									<p class="font-14 mb-5">Postcode</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Libelle</div>
								<div class="invoice-rate">Prix unitaire</div>
								<div class="invoice-hours">quantiti </div>
								<div class="invoice-subtotal">prix total</div>
							</div>
							<div class="invoice-desc-body">
                                
                            <?php $prix_globale=0;foreach($commandes as $row){
                                $prix_globale+=$row->__get("prix_totale");
                                 ?> 

								<ul>
									<li class="clearfix">
										<div class="invoice-sub"><?=$row->__get("libelle")?></div>
										<div class="invoice-rate"><?=$row->__get("prix_vent")?></div>
										<div class="invoice-hours"><?=$row->__get("quantiti_commande")?></div>
										<div class="invoice-subtotal"><span class="weight-600"><?=$row->__get("prix_totale")?> DHS</span></div>
									</li>
								</ul>
                                <?php }?>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Bank Info</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Code: <strong class="weight-600"><?=$num_commande?></strong></p>
											</div>
											<div class="invoice-rate font-20 weight-600"><?=$commandes[0]->__get("date_commande")?></div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger"><?=$prix_globale ?> DHS</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
			
		</div>
        <!-- js -->
	<script src="../../../deskapp2-master/vendors/scripts/core.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/script.min.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/process.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/layout-settings.js"></script>
	
	<script src="../../../deskapp2-master/src/plugins/datatables/js/pdfmake.min.js"></script>
</body>
</html>