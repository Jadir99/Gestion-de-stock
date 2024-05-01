<?php 
require_once ("../verification/verification.php");
require_once ("../../Class/class_categorie.php");
$categories=categorie::afficher_categorie();
include_once("../../menu/menu.php") ;  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../../../deskapp2-master/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../../deskapp2-master/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../../deskapp2-master/vendors/images/favicon-16x16.png">

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
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
    <!-- Checkbox select Datatable End -->
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Table des categories</h4>
					</div>
					<div class="pb-20">

<!-- ajouter categorie -->
					<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_categorie.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
										<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-copy fi-plus"></i> Ajouter</button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Novell categorie</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
									<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label >Donner le nom de categorie</label>
												<input type="text" class="form-control" name="nom_categorie"required>
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
                                <tr class="text-center">
                                <th scope="table-plus datatable-nosort">Nom de categorie</th>
                                <th scope="table-plus datatable-nosort">Modifier categorie</th>
                                <th scope="table-plus datatable-nosort">Supprimer categorie</th>
                                
                            </tr>
							</thead>
							<tbody>
                            <?php
                                foreach ( $categories as $row ) {
                                ?>
                                    <tr class="text-center">
                                        <td><?=$row->__get("nom_categorie")?></td>
<!--   modifier categorie -->

<td>
							<form class="tab-wizard wizard-circle wizard vertical" action="modifier_categorie.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg<?=$row->__get("id_categorie")?>" type="button"><br>
									<!-- <i class="icon-copy fa fa-pencil" aria-hidden="true"></i> -->
									
									<button type="button" id="" class="btn btn-outline-info" fill="currentColor"width="1em" height="1em" ><i class="icon-copy fa fa-pencil-square-o text-right" aria-hidden="true"></i></button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg<?=$row->__get("id_categorie")?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Modifier categorie</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
													
												</div>
												<div class="modal-body">
									<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label >Donner le nom de categorie</label>
												<input type="text" class="form-control" name="nom_categorie" value="<?=$row->__get("nom_categorie")?>">
											</div>
										</div>
									</div>
									
									<input type="hidden" class="form-control" name="id_categorie" value="<?=$row->__get("id_categorie")?>">
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
										<!-- supprimer categorie -->
										<td>
											<a href="#" class="btn-block" data-toggle="modal" data-target="#confirmation-modal<?=$row->__get("id_categorie")?>" type="button">
											<!-- <i class="dw dw-delete-2"></i> -->
											<button type="button" id="supp"class="btn btn-outline-danger"width="1em" ><i class="dw dw-delete-2"></i></button>
											</a>
											<div class="modal fade" id="confirmation-modal<?=$row->__get("id_categorie")?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-body text-center font-18">
															<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to continue?<?php echo  $row->__get("id_categorie") ;?></h4>
															<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
																<div class="col-6">
																	<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal" ><i class="fa fa-times"></i></button>
																	<label style="color:black">No</label>
																</div>
																<div class="col-6">
																	
																	<a href="supprimer_categorie.php?id_categorie=<?=$row->__get("id_categorie")?>">
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
					<script>swal("Bien!", "le produit a été ajouteé", "success");</script>
					<?php }else if (!empty($_GET['update'])) {
						?>
					<script>swal("Bien!", "le produit a été modifier", "success");</script>
					<?php }else if (!empty($_GET['delete'])) {
						?>
					<script>swal("Bien!", "le produit a été supprimer", "success");</script>
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
	<!-- add sweet alert js & css in footer -->
	<script src="../../../deskapp2-master/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="../../../deskapp2-master/src/plugins/sweetalert2/sweet-alert.init.js"></script>
</html>