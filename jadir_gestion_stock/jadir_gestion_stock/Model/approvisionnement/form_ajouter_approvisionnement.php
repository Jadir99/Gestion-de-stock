<?php require_once ("../verification/verification.php");
include_once("../../menu/menu.php") ; 
require_once ("../../Class/class_fournisseur.php");
require_once ("../../Class/class_produit.php");
$fournisseurs=fournisseur::afficher_fournisseur(); 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
						
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_approvisionnement.php" method="post" >
							<h5 class="text-blue h4">Novelle achat</h5>
							<section>
								
								<div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>fournisseur</label>
                                            <select class="custom-select2 form-control" name="id_fournisseur" style="width: 100%; height: 38px;">
                                            <?php foreach($fournisseurs as $row){?>
                                                    <option value="<?=$row->__get("id_for")?>"><?=$row->__get("nom_for")?> <?=$row->__get("prenom_for")?> <?=$row->__get("tele_for")?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
							        </div>

									<div class="col-md-12">
										<div class="form-group">
											<label >Numero d'approvisionnement</label>
											<input type="text" class="form-control" name="num_approvisionnement"required>
										</div>
									</div>

									
								</div>

                                
								<div class="row">
								<div class="col-md-6 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#edit" type="button">
										<button class="btn  btn-lg btn-outline-dark " type="button" ><i class="icon-copy fi-plus"></i>	Ajouter produits</button>
									</a>
									<div class="modal fade bs-example-modal-xl" id="edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Liste produits</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body"><div class="mobile-menu-overlay"></div>
 
													<div class="">
														<div class="">
															
															<div class="card-box mb-30">
																<h2 class="h4 pd-20">Les produits</h2>
																<table class="data-table table nowrap">
																	<thead>
																		<tr>
																			<th >cheki</th>
																			<th class="table-plus datatable-nosort">Product</th>	
																			<th>Name</th>
																			<th>categorie</th>
																			<th>Prix de vent</th>
																			<th>Quantite initial</th>
																			<th>Quantite de vent</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php foreach ( $produits as $row ) {
																				?>
																				
																					<tr>
																						<td>
																							<div class="form-check form-switch">
																								<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" 
																								name="produits[]" value="<?=$row->__get("reference")?>" onclick="myFunction()" required >
																							</div>
																						</td>
																						<td><img height="100" width="100" src="<?=$row->__get("image")?>"></td>
																						<td><?=$row->__get("libelle")?></td>
																						<td><?=$row->__get("nom_categorie")?></td>
																						<td><?=$row->__get("prix_vent")?></td>
																						<td><?=$row->__get("quantite_stock")?></td>
																						<td><div class="row">
																							<div class="col-md-12 col-sm-12">
																								<div class="form-group">
																										<input  id="number" style="display:none" class="form-control" type="number" placeholder="0" name="quantiti_approvisionnement[]" min="0" max="<?=$row->__get("quantite_stock")?>"required>
																								<input type="hidden" name="prix_vent[]"value="<?=$row->__get("prix_vent")?>"required>
																								</div>
																							</div>
																							</div>
																						</td>
																						<!-- creet a methode dans class produit get id cleint -->
																					</tr>
																					<?php }?>
																		
																		
																		
																	</tbody>
																</table>
															</div>
														</div>
													</div>  
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									
									</div>                                        
								</div>
			
								

                                    <div class="col-md-6">
										<div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="sauvgarder">Sauvgarder</button>
										</div>
									</div>
									</div>
							</section>

                            
							
						</form>
                        
					</div>
				</div>

			</div>
			<?php include ("../../menu/footer.html");?>
		</div>
	</div>
<script>

function myFunction() {
  // Get the checkbox
 
  
  var checkBox = document.getElementsByName("produits[]");
  var text = document.getElementsByName("quantiti_approvisionnement[]");
//   alert(text.length);
  // If the checkbox is checked, display the output text
  for (i=0;i<checkBox.length;i++){
	if (checkBox[i].checked == true){
    text[i].style.display = "block";
	} else {
		text[i].style.display = "none";
	}
  }
}

</script>


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
	<script src="test.js"></script>
	<!-- Datatable Setting js -->
	<script src="../../../deskapp2-master/vendors/scripts/datatable-setting.js"></script>
    
    <!-- bootstrap-touchspin js -->
	<script src="../../../deskapp2-master/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/advanced-components.js"></script>
</body>
</html>