<?php require_once ("../verification/verification.php");
require_once ("../../Class/class_fournisseur.php");
$fournisseurs=fournisseur::afficher_fournisseur();
include_once("../../menu/menu.php") ;  ?>
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
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
    <!-- Checkbox select Datatable End -->
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Table des fournisseurs</h4>
					</div>
					<div class="pb-20">
						<!-- ajouter fournisseur  -->
					<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_fournisseur.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
										<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-copy fi-plus"></i>  Ajouter</button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
												<h5>les informations de for</h5>
									<section>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label >Prenom:</label>
													<input type="text" class="form-control" name="nom"required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label >Nom:</label>
													<input type="text" class="form-control" name="prenom"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Addresse-Email :</label>
													<input class="form-control" placeholder="example@example.com" type="email" name="email"required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Telephone :</label>
													<input type="text" placeholder="+212----------"  class="form-control" name="tele"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Addresse :</label>
													<input type="text" class="form-control" name="adresse"required>
												</div>
											</div>
										</div>
									</section>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="sauvgrader">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								
							</form>	
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
                                <tr>
                                <th scope="table-plus datatable-nosort">Nom</th>
                                <th scope="table-plus datatable-nosort">Prenom</th>
                                <th scope="table-plus datatable-nosort">Adresse</th>
                                <th scope="table-plus datatable-nosort">Email</th>
                                <th scope="table-plus datatable-nosort">Telephone</th>
                                <th scope="table-plus datatable-nosort">Modifier</th>
                                <th scope="table-plus datatable-nosort">Supprimer</th>
                            </tr>
							</thead>
							<tbody>
                            <?php
                                foreach ( $fournisseurs as $row ) {
                                ?>
                                    <tr>
                                        <td><?=$row->__get("nom_for")?></td>
                                        <td><?=$row->__get("prenom_for")?></td>
                                        <td><?=$row->__get("adresse_for")?></td>
                                        <td><?=$row->__get("email_for")?></td>
                                        <td><?=$row->__get("tele_for")?></td>

										<!-- modifier fournisseur -->
<td>
							<form class="tab-wizard wizard-circle wizard vertical" action="modifier_fournisseur.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#editModal<?=$row->__get("id_for")?>" type="button">
										<br>
									<button type="button" id="" class="btn btn-outline-info" fill="currentColor"width="1em" height="1em" ><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="editModal<?=$row->__get("id_for")?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
                                    
                                                    <h5>Personal Info</h5>
                                                    <section>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label >Prenom :</label>
                                                                    <input type="text" class="form-control" name="nom" value="<?=$row->__get("nom_for")?>"required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label >Nom:</label>
                                                                    <input type="text" class="form-control" name="prenom" value="<?=$row->__get("prenom_for")?>"required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Adresse-Email  :</label>
                                                                    <input class="form-control" placeholder="bootstrap@example.com" type="email" name="email" value="<?=$row->__get("email_for")?>"required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Telephone :</label>
                                                                    <input type="text" placeholder="1-(111)-111-1111"  class="form-control" name="tele" value="<?=$row->__get("tele_for")?>"required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Address  :</label>
                                                                    <input type="text" class="form-control" name="adresse" value="<?=$row->__get("adresse_for")?>"required>
                                                                </div>
                                                            </div>
                                                                <input type="hidden" name="id_for" value="<?=$row->__get("id_for")?>"required>
                                        
                                                        </div>
                                                    </section>
									
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="sauvgrader">Save changes</button>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								
							</form>	 
</td>									
							
							<td>
											<a href="#" class="btn-block" data-toggle="modal" data-target="#confirmation-modal<?=$row->__get("id_for")?>" type="button">
											<button type="button" id="supp"class="btn btn-outline-danger"width="1em" ><i class="dw dw-delete-2"></i></button>
											</a>
											<div class="modal fade" id="confirmation-modal<?=$row->__get("id_for")?>" tabindex="-1" role="dialog" aria-hidden="true">
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
																	
																	<a href="supprimer_fournisseur.php?id_for=<?=$row->__get("id_for")?>">																		
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
                                    </tr>
                                    <?php }?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- footer -->
				<?php include ("../../menu/footer.html");?>

                </div>
				
				</div>   
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					<?php if (!empty($_GET['ajouter'])) {
						?>
					<script>swal("Bien!", "le fournisseur a été ajouteé", "success");</script>
					<?php }else if (!empty($_GET['update'])) {
						?>
					<script>swal("Bien!", "le fournisseur a été modifier", "success");</script>
					<?php }else if (!empty($_GET['delete'])) {
						?>
					<script>swal("Bien!", "le fournisseur a été supprimer", "success");</script>
					<?php }?>
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