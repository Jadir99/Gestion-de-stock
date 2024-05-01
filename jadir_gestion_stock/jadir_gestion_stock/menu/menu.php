<?php 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!-- Site favicon -->
	
	<link rel="icon"   href="/server/jadir_gestion_stock/menu/jadir_store_icon.png">
	

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../../deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../deskapp2-master/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../deskapp2-master/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../deskapp2-master/vendors/styles/style.css">

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
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img height="500" width="300" src="/server/jadir_gestion_stock/menu/jadir_store1.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->
	
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="/server/jadir_gestion_stock/menu/admin.png" alt="">
						</span>
						<span class="user-name"><?= $_SESSION['username'];?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="../logout/logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-20 text-blue">
				Parametres
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="../Home/index.php">
				<img src="/server/jadir_gestion_stock/menu/jadir_store1.png" alt="" class="dark-logo">
				<img src="/server/jadir_gestion_stock/menu/jadir_store1.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="../Home/index.php">Home</a></li>
						</ul>
					</li>
										
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-user-circle"></span><span class="mtext">Client</span>
						</a>
						<ul class="submenu">
							<li><a href="../client/table_client.php">Afficher Clients</a></li>
							<li><a href="../client/form_ajouter_client.php">Ajouter Client</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-user-circle"></span><span class="mtext">Fournisseur</span>
						</a>
						<ul class="submenu">
							<li><a href="../fournisseur/table_fournisseur.php">Afficher Fournisseur</a></li>
							<li><a href="../fournisseur/form_ajouter_fournisseur.php">Ajouter Fournisseur</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-shopping-bag"></span>
							<span class="mtext">Produit</span>
						</a>
						<ul class="submenu">
							<li><a href="../produit/table_produit.php">Afficher Produit</a></li>
							<li><a href="../produit/form_ajouter_produit.php">Ajouter Produit</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-window-restore"></span><span class="mtext">Categorie</span>
						</a>
						<ul class="submenu">
							<li><a href="../categorie/table_categorie.php">Afficher Categorie</a></li>
							<li><a href="../categorie/form_ajouter_categorie.php">Ajouter Categorie</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-shopping-cart"></span><span class="mtext">Commande</span>
						</a>
						<ul class="submenu">
							<li><a href="../commande/form_ajouter_commande.php">Ajouter commande</a></li>
							<li><a href="../commande/table_commande.php">Afficher commandes</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon fa fa-dropbox"></span><span class="mtext">Approvisionnement</span>
						</a>
						<ul class="submenu">
							<li><a href="../Approvisionnement/form_ajouter_Approvisionnement.php">Ajouter Approvisionnement</a></li>
							<li><a href="../Approvisionnement/table_achats.php">Afficher Approvisionnements</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="../commande/caisse.php"target="_blank" class="dropdown-toggle">
							<span class="micon dw dw-invoice"></span><span class="mtext">Caisse</span>
							<!-- <i class="icon-copy fi-page-doc"></i> -->
						</a>
					</li>
					
					<li>
						<a href="../logout/logout.php"  class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Deconnexion <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
	
		
</div>
</body>


<script src="../../deskapp2-master/vendors/scripts/core.js"></script>
	<script src="../../deskapp2-master/vendors/scripts/script.min.js"></script>
	<script src="../../deskapp2-master/vendors/scripts/process.js"></script>
	<script src="../../deskapp2-master/vendors/scripts/layout-settings.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../../deskapp2-master/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../../deskapp2-master/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../../deskapp2-master/vendors/scripts/datatable-setting.js"></script></body>
</html>