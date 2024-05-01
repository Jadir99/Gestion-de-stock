<?php
require_once ("../verification/verification.php");
require_once ("../../Class/class_produit.php");
$produits=Produit::afficher_produit();
include_once("../../menu/menu.php") ;
require_once ("../../Class/class_categorie.php");
$categories=categorie::afficher_categorie();   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des produits</title>
	<link rel="icon"   href="menu/jadir_store_icon.png">
    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../deskapp2-master/vendors/styles/style.css">
<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>
	#supp {
		position:relative;
		bottom:28.5%;
}
</style>
</head>
<body>
	
	<div class="mobile-menu-overlay"></div>
 
	<div class="main-container">
		<div class="pd-ltr-20">
			
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Table des produits</h2>
				<!-- ajouter produit -->
				<form class="tab-wizard wizard-circle wizard vertical"  action="ajouter_produit.php" method="post" enctype="multipart/form-data">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
										<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-copy fi-plus"></i> Ajouter</button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">ajouter produit</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
												<h5>les informations de client</h5>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label >Libelle</label>
                                                                <input type="text" class="form-control" name="libelle"required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label >Description</label>
                                                                <input type="text" class="form-control" name="description"required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Prix unitaire</label>
                                                                <input id="demo2" type="text" value="0"  name="prix_unitaire"required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Qunatiti de stock</label>
                                                                <input id="demo3_22" type="text" value="10" name="quantiti"required>
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
                                                                
                                                                <input type="file" class="form-control-file form-control height-auto" name="photo"required>
                                                                </select>
                                                            </div>
                                                        </div> 


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Prix de vent</label>
                                                                <input id="demo2" type="text" value="0" name="prix_vent"required > 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Prix d'achat</label>
                                                                <input id="demo2" type="text" value="0" name="prix_achat" required> 
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </section>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="sauvgrader">Save changes</button>
												</div>
												</div>
												
											</div>
										</div>
									</div>
									
								</div>
								
							</form>	
							
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Libelle</th>
							<th>categorie</th>
							<th>Prix de vent</th>
							<th>Prix d'achat</th>
							<th>Quantite</th>
							<th>Supprimer</th>
							<th>Modifier </th>
							
						</tr>
					</thead>
					<tbody>
					<?php foreach ( $produits as $row ) {
                                ?>
								
                                    <tr class="text-center">
                                         <td><img style="height:100px; width=100px" src="<?=$row->__get("image")?>"></td>
                                        <td><?=$row->__get("libelle")?></td>
                                        <td><?=$row->__get("nom_categorie")?></td>
                                        <td><?=$row->__get("prix_vent")?></td>
                                        <td><?=$row->__get("prix_achat")?></td>
                                        <td><?=$row->__get("quantite_stock")?></td>

                                        <!-- creet a methode dans class produit get id cleint -->
										

<!--##############################################################################" suppromer produit ###############################################-->


												
<td>
											<a href="#" class="btn-block" data-toggle="modal" data-target="#confirmation-modal<?=$row->__get("reference")?>" type="button">
											<!-- <i class="dw dw-delete-2"></i> -->
											<br>
											<button type="button" id="supp"class="btn btn-outline-danger"width="1em" ><i class="dw dw-delete-2"></i></button>
									
											</a>
											<div class="modal fade" id="confirmation-modal<?=$row->__get("reference")?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-body text-center font-18">
															<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to continue?</h4>
															<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
																<div class="col-6">
																	<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal" ><i class="fa fa-times"></i></button>
																	NO
																</div>
																<div class="col-6">
																	
																	<a href="supprimer_produit.php?reference=<?=$row->__get("reference")?>">
																		<button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" ><i class="fa fa-check"></i></button>
																		YES
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>												

<!--##############################################################################" modifer produit ###############################################-->
<td>
							<form class="tab-wizard wizard-circle wizard vertical"  action="modifier_produit.php?reference=<?=$row->__get("reference")?>" method="post" enctype="multipart/form-data">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									<br>
									<a href="#" class="btn-block" data-toggle="modal" data-target="#editmodal<?=$row->__get("reference")?>" type="button">
									<!-- <i class="icon-copy fa fa-pencil" aria-hidden="true"></i> -->
									<!-- <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i> -->
									<br>
									<button type="button" id="" class="btn btn-outline-info" fill="currentColor"width="1em" height="1em" ><i class="bi bi-pencil-square"></i></button>
									
									</a>
									
									<div class="modal fade bs-example-modal-lg" id="editmodal<?=$row->__get("reference")?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
												<h5>les informations de produit</h5>
                                                <section>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label >Libelle</label>
                                                                <input type="text" class="form-control" name="libelle" id="elibelle" value="<?=$row->__get("libelle")?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label >Description</label>
                                                                <input type="text" class="form-control" name="description" id="desc" value="<?=$row->__get("description")?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Prix unitaire</label>
                                                                <input id="demo2" type="text"   name="prix_unitaire"value="<?=$row->__get("prix_vent")?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Qunatiti de stock</label>
                                                                <input id="demo3_22" type="text"  name="quantiti"value="<?=$row->__get("quantite_stock")?>">
                                                            </div>
                                                        </div>
                                                    </div>

													<input type="hidden" name="referance" value="<?=$row->__get("reference")?>">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Prix de vent</label>
                                                                <input id="demo2" type="text"  name="prix_vent" value="<?=$row->__get("prix_vent")?>"> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Prix d'achat</label>
                                                                <input id="demo2" type="text"  name="prix_achat" value="<?=$row->__get("prix_achat")?>"> 
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Categorie</label><br>
                                                                <select class="custom-select2 form-control" name="id_categorie" style="width: 100%; height: 38px;" >
                                                                <?php foreach($categories as $row){?>
                                                                        <option value="<?=$row->__get("id_categorie")?>"><?=$row->__get("nom_categorie")?></option>
                                                                <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>  

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>L'image</label>
                                                                <input type="file" class="form-control-file form-control height-auto" name="img" >
                                                            </div>
                                                        </div> 


                                                    </div>
                                                
												</section>

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="sauvgrader">Sauvgarder</button>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								
							</form>	

</td>







                                        
                                    </tr>
                                    <?php }?>
						
						
					</tbody>
				</table>
			</div>
			<?php include ("../../menu/footer.html");?>
		</div>
	</div>  
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					<?php if (!empty($_GET['ajouter'])) {
						?>
					<script>swal("Bien!", "le produit a été ajouteé", "success");</script>
					<?php }else if (!empty($_GET['update'])) {
						?>
					<script>swal("Bien!", "le produit a été modifier", "success");</script>
					<?php }else if (!empty($_GET['delete'])) {
						?>
					<script>swal("Bien!", "le produit a été supprimer", "success");</script>
					<?php }?>
	
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
	<!-- Datatable Setting js -->
	<script src="../../../deskapp2-master/vendors/scripts/datatable-setting.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="../../../deskapp2-master/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/advanced-components.js"></script>
</html>