<?php
require_once ("../verification/verification.php");
require_once ("../../Class/class_produit.php");
$produits=Produit::afficher_produit(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
	<form action="">
	<div class="mobile-menu-overlay"></div>
 
	<div class="main-container">
		<div class="pd-ltr-20">
			
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
                            <th >selectionner</th>
							<th class="table-plus datatable-nosort">Product</th>	
							<th>Name</th>
							<th>categorie</th>
							<th>Prix de vent</th>
							<th>Quantite initial</th>
							<th>Quantite de vent</th>
                            <th>description</th>
							<th>Prix d'achat</th>
							
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ( $produits as $row ) {
                                ?>
								
                                    <tr>
                                        <td>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="custom-control custom-checkbox mb-5">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1-1"value="<?=$row->__get("reference")?>" name="referance">
                                                    <label class="custom-control-label" for="customCheck1-1"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?=$row->__get("image")?></td>
                                        <td><?=$row->__get("libelle")?></td>
                                        <td><?=$row->__get("nom_categorie")?></td>
                                        <td><?=$row->__get("prix_vent")?></td>
                                        <td><?=$row->__get("quantite_stock")?></td>
                                        <td><div class="row">
                                            <div class="col-md-6 col-sm-12">
										        <div class="form-group">
                                                <label>Qunatiti de stock</label>
                                                <input id="demo3_22" type="text" value="10" name="quantiti_commande">
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                        <td><?=$row->__get("description")?></td>
                                        <td><?=$row->__get("prix_achat")?></td>
                                        <!-- creet a methode dans class produit get id cleint -->
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
													<a class="dropdown-item" href="form_modifier_produit.php?reference=<?=$row->__get("reference")?>"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="supprimer_produit.php?reference=<?=$row->__get("reference")?>"><i class="dw dw-delete-3"></i> Delete</a>
												</div>
											</div>
										</td>
                                    </tr>
                                    <?php }?>
						
						
						
					</tbody>
				</table>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>  
    </form>
</body>
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
</html>