<?php require_once ("../verification/verification.php");
include_once("../../menu/menu.php") ; 
require_once ("../../Class/class_categorie.php");
$categories=categorie::afficher_categorie(); ?>
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
<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Ajouter produit</h4>
						
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_produit.php" method="post" enctype="multipart/form-data">
							<h5>Novelle produit</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Libelle</label>
											<input type="text" class="form-control" name="libelle">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Description</label>
											<input type="text" class="form-control" name="description">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Prix unitaire</label>
											<input id="demo2" type="text" value="0"  name="prix_unitaire">
										</div>
									</div>

									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Qunatiti de stock</label>
											<input id="demo3_22" type="text" value="10" name="quantiti">
										</div>
									</div>
								</div>

								<div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Categorie</label>
                                            <select class="custom-select2 form-control" name="id_categorie" style="width: 100%; height: 38px;">
                                            <?php foreach($categories as $row){?>
                                                    <option value="<?=$row->__get("id_categorie")?>"><?=$row->__get("nom_categorie")?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
							        </div>  

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>L'image</label>
											
                                            <input type="file" class="form-control-file form-control height-auto" name="photo">
                                            </select>
                                        </div>
							        </div> 


								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Prix de vent</label>
											<input id="demo2" type="text" value="0" name="prix_vent" > 
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <label>Prix d'achat</label>
                                            <input id="demo2" type="text" value="0" name="prix_achat" > 
										</div>
                                        
									</div>
								</div>
								

                                <div class="col-md-12">
										<div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="sauvgrader">Sauvgarder</button>
										</div>
									</div>
							</section>
							
						</form>
                        
					</div>
				</div>

			</div>
			
		</div>
	</div>
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
    
    <!-- bootstrap-touchspin js -->
	<script src="../../../deskapp2-master/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/advanced-components.js"></script>
</body>
</html>