
<?php
require_once ("../verification/verification.php");
require_once ("../../Class/class_all.php");    
extract($_GET);
include_once("../../menu/menu.php") ; 
$commandes=ALL::gat_all_commandes();
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
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/style.css">

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

<div class="mobile-menu-overlay"></div>
 
 <div class="main-container">
	 <div class="pd-ltr-20">
		 
		 <div class="card-box mb-30">
			 <h2 class="h4 pd-20">Best Selling Products</h2>
			 
			 <table class="data-table table nowrap">
				 <thead>
					 <tr>
						 <th>Numer de commande</th>
						 <th>Nom client</th>
						 <th>prenom</th>
						 <th>date commande</th>
						 <th class="datatable-nosort">Action</th>
					 </tr>
				 </thead>
				 <tbody>
				 <?php foreach ( $commandes as $row ) {
							 ?>
							 
								 <tr>
									 <td><?=$row->__get("numero_commande")?></td>
									 <td><?=$row->__get("nom")?></td>
									 <td><?=$row->__get("prenom")?></td>
									 <td><?=$row->__get("date_commande")?></td>
									 <!-- creet a methode dans class produit get id cleint -->
									 <td>
										 <div class="dropdown">
											 <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												 <i class="dw dw-more"></i>
											 </a>
											 <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												 <a class="dropdown-item" href="facture_commande.php?num_commande=<?=$row->__get("numero_commande")?>"><i class="dw dw-eye"></i> View</a>
											 </div>
										 </div>
									 </td>
								 </tr>
								 <td></td>
								 <?php }?>			 
					 
				 </tbody>
			 </table>
			 
		 </div>
		 <!-- footer -->
		 <?php include ("../../menu/footer.html");?>
	 </div>
 </div>  
        <!-- js -->
		<script src="../../../deskapp2-master/vendors/scripts/core.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/script.min.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/process.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/layout-settings.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../../../deskapp2-master/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../../../deskapp2-master/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../../../deskapp2-master/vendors/scripts/datatable-setting.js"></script>
</body>
</html>