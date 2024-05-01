<?php 
require_once ("../verification/verification.php");
require_once ("../../Class/class_client.php");
$clients=client::afficher_client();
include_once("../../menu/menu.php") ;  ?>
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
						<h4 class="text-blue h4">Table des clients</h4>
					</div>					
					<div class="pb-20">	
						<!-- ajouter un client!! -->
						<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_client1.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
										<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon-copy fi-plus"></i>  Ajouter</button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Novelle client</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
												<h5>les informations de client</h5>
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
						<table class="table hover multiple-select-row data-table-export nowrap" >
							
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
                                foreach ( $clients as $row ) {
                                ?>
                                    <tr style="padding: 0px;">
                                        <td ><?=$row->__get("nom")?></td>
                                        <td ><?=$row->__get("prenom")?></td>
                                        <td ><?=$row->__get("adresse")?></td>
                                        <td ><?=$row->__get("email")?></td>
                                        <td ><?=$row->__get("tele")?></td>
                                        <!-- creet a methode dans class client get id cleint -->


										<!-- modifier client -->




							<td>
								<form class="tab-wizard wizard-circle wizard vertical" action="modifier_client.php" method="post">
								<div class="col-md-4 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->
									
									<a href="#" class="btn-block" data-toggle="modal" data-target="#edit<?=$row->__get("id_client")?>" type="button">
										<br>
									<button type="button" id="" class="btn btn-outline-info" fill="currentColor"width="1em" height="1em" ><i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i></button>
									</a>
									<div class="modal fade bs-example-modal-lg" id="edit<?=$row->__get("id_client")?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myLargeModalLabel">Modifier client</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												</div>
												<div class="modal-body">
												<h5>les informations de client</h5>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >First Name :</label>
                                                <input type="text" class="form-control" name="nom" value="<?=$row->__get("nom")?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label >Last Name :</label>
                                                <input type="text" class="form-control" name="prenom" value="<?=$row->__get("prenom")?>"required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address :</label>
                                                <input class="form-control" value="<?=$row->__get("email")?>" type="email" name="email"required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number :</label>
                                                <input type="text" value="<?=$row->__get("tele")?>"  class="form-control" name="tele"required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address Name :</label>
                                                <input type="text" class="form-control" name="adresse" value="<?=$row->__get("adresse")?>"required>
                                            </div>
                                        </div>
                                            <input type="hidden" name="id_client" value="<?=$row->__get("id_client")?>"required>
                                        
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

























										
										<!-- supprimer client -->
										<td>
											<a href="#" class="btn-block" data-toggle="modal" data-target="#confirmation-modal<?=$row->__get("id_client")?>" type="button">
											<button type="button" id="supp"class="btn btn-outline-danger"width="1em" ><i class="dw dw-delete-2"></i></button>
											</a>
											<div class="modal fade" id="confirmation-modal<?=$row->__get("id_client")?>" tabindex="-1" role="dialog" aria-hidden="true">
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
																	
																	<a href="supprimer_client.php?id_client=<?=$row->__get("id_client")?>">
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
				<!-- Export Datatable End -->
				<?php include ("../../menu/footer.html");?>
                </div>
				
				</div> 
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					<?php if (!empty($_GET['ajouter'])) {
						?>
					<script>swal("Bien!", "le client a été ajouteé", "success");</script>
					<?php }else if (!empty($_GET['update'])) {
						?>
					<script>swal("Bien!", "le client a été modifier", "success");</script>
					<?php }else if (!empty($_GET['delete'])) {
						?>
					<script>swal("Bien!", "le client a été supprimer", "success");</script>
					<?php }?>
				<!-- <button onclick="window.print()">PDF</button>   -->
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
