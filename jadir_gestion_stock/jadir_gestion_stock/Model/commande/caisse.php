<?php 
require_once ("../verification/verification.php");
// include_once("../../menu/menu.php") ; 
require_once ("../../Class/class_client.php");
require_once ("../../Class/class_categorie.php");
require_once ("../../Class/class_produit.php");
$clients=client::afficher_client(); 
$categories=categorie::afficher_categorie(); 
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



<!-- categorie -->





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
			
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			
			
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
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

				
				

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
				<img src="/server/jadir_gestion_stock/menu/jadir_store1.png" alt="" class="dark-logo">
				<img src="/server/jadir_gestion_stock/menu/jadir_store1.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
					
        <div class="card-box mb-40" >
            <table class="table nowrap"style="fontsize:18px;">
            <h2 class="h4 pd-20" style="color:#1b00ff">Categories</h2>
                <thead>
                    <tr>
                        <th class="text-center">Categorie</th>
                        <th class="text-center">Voir</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ( $categories as $row ) {
                    ?>

                        <tr class="text-center h4 pd-20">
                            <td ><?=$row->nom_categorie?></td>
                            <td class="text-center" >
                            <button type="button" value="Add"class="btn btn-outline-dark "value="Voir"onclick="Cat('<?=$row->nom_categorie?>')"><i class="dw dw-eye"></i></button>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
						
					
			</div>
			</div>
		</div>
	</div>
	
		
</div>
</body>
        
	





























<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard vertical" action="ajouter_caisse.php" method="post" >
							<h5 class="text-blue">Novelle commande</h5>
							<section>
								

                                
	<!-- ajouter produit -->
	
							<div class="col-md-12 col-sm-12 mb-30">
								<!-- <div class="pd-20 card-box height-100-p"> -->		
															
															<div class="card-box mb-30">
																<h2 class="h4 pd-20">Selectioner les produits</h2>
																<table class="data-table table nowrap">
																	<thead>
																		<tr class="text-center">
																			<th >cheki</th>
																			<th class="table-plus datatable-nosort">Produit</th>	
																			<th>Nom</th>
																			<th>categorie</th>
																			<th>Prix</th>
																			<th>Quantite initial</th>
																		</tr>
																	</thead>
																	<tbody id="table-body">
																	<?php foreach ( $produits as $row ) {
																				?>
																				
																					<tr id="<?=$row->nom_categorie?>" class="text-center" >
																						<td class="text-left">
																							<div class="form-check form-switch">

																								<input  type="hidden" id="flexSwitchCheckDefault" 
																								name="produits[]" value="<?=$row->__get("reference")?>" onclick="myFunction()"  >
                                                                                                <button type="button" value="Add"class="btn btn-outline-dark " onclick=
                                                                                                "addRow('<?=$row->__get('reference')?>','<?=$row->__get('libelle')?>','<?=$row->__get('prix_vent')?>',
                                                                                                '<?=$row->__get('quantite_stock')?>')"><i class="icon-copy fi-plus"></i></button>

																							</div>
																						</td>
																						<td><img  style="height:100px; width=100px" src="<?=$row->__get("image")?>"></td>
																						<td><?=$row->__get("libelle")?></td>
																						<td><?=$row->__get("nom_categorie")?></td>
																						<td><?=$row->__get("prix_vent")?></td>
																						<td><?=$row->__get("quantite_stock")?></td>
																						
																						<!-- creet a methode dans class produit get id cleint -->
																					</tr>
																					<?php }?>
																		
																		
                                                            </div>

                                                            
                                                            
																	</tbody>
				                </table>
                                                                

														
													                                      
								</div>
<div class="card-box mb-40" >
<h2 class="h4 pd-20">Ticket</h2> 
                                                                        
<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Client</label>
            <select class="custom-select2 form-control" name="id_client" style="width: 100%; height: 38px;">
                <?php foreach($clients as $row){?>
                <option value="<?=$row->__get("id_client")?>"><?=$row->__get("nom")?> <?=$row->__get("prenom")?> <?=$row->__get("tele")?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label >Numero de commande</label>
            <input type="text" class="form-control" name="num_commande" required>
        </div>
    </div>
</div>


<table class="table table-striped">
    <thead>
        <tr class="text-center">
            <th class="table-plus datatable-nosort ">Product</th>	
            <th >Name</th>
            <th>Prix de vent</th>
            <th>Quantite initial</th>
            <th>Quantite de vent</th>
        </tr>
    </thead>
    <tbody  id="ticket-body" >

    </tbody>
</table>
			
			
		</div>
		</div>
	</div>  
    
                                    <div class="col-md-12">
										<div class="form-group">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="sauvgarder">Sauvgarder</button>
										</div>
									</div>
							</section>
							
						</form>
                        
					</div>
				</div>

			</div>
            
			
		</div>
        
	</div>


    
	<script>
// 		$(this).find('.form-control').hide();
// 	$(function jadir(){
// 		$(".form-check-input").click(function(event) {
// 			var x = $(this).is(':checked');
// 			if (x == true) {
// 				$(this).find('.form-control').show();
// 			}
// 			else{
// 				$(this).find('.form-control').hide();
// 			}
// 		});
// 	})

// 	$(".form-control").hide();
// $(".form-check-input").click(function() {
//     if($(this).is(":checked")) {
//         $(".form-control").show(300);
//     } else {
//         $(".form-control").hide(200);
//     }
// });

function myFunction() {
  // Get the checkbox
 
  
  var checkBox = document.getElementsByName("produits[]");
  var text = document.getElementsByName("quantiti_commande[]");
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


<script>
    function Cat(id){
  child=document.getElementById("table-body").children;
  let size = child.length;
  for(var i=0;i<size;i++) {
    if(child.item(i).getAttribute("id")!=id){
      child.item(i).style.display = "none";
    }
    if(child.item(i).getAttribute("id")==id){
        child.item(i).style.display = "";
    }
  }
}

function CatAll(){
  child=document.getElementById("table-body").children;
  let size = child.length;
  for(var i=0;i<size;i++) {
      child.item(i).style.display = "";
  }
}
</script>

<script>


var lignecmd=0;
var i=1;
var n=0;
var ps=0;

function addRow(r,l,p,q){
  exist=false;
  if(tr = document.getElementById("ticket-body").getElementsByTagName("tr")){
    let size = tr.length;
      for(var m=0;m<size;m++) {
          if(tr.item(m).getAttribute("class")==r) exist=true;
      }
  }
  if(!exist){
    document.getElementById("ticket-body").innerHTML += 
    '<tr id="'+i+'" class="'+r+' text-center"> '+
    '<td class="lib-col"> <input type="hidden" name="cart['+i+'][0]" value="'+r+'"><input type="hidden" value="'+l+'" class="form-control libelle"><div>'+l+'</div> </td>'+
    '<td> <div style="font-size: 0.9rem;">'+p+' Dh</div>  <input type="hidden" name="cart['+i+'][1]" id="prix" value="'+p+'" min="1" class="form-control prix" style="font-size: 0.9rem;">  </td> '+
    '<td> <input onclick="total('+i+','+p+')" onchange="total('+i+','+p+')" type="number" name="cart['+i+'][2]" id="qnt'+i+'" value="1" min="1" max="'+q+'" class="form-control" style="font-size: 0.9rem;"> </td>'+
    '<td> <div id="total'+i+'" style="font-size: 0.9rem;" >'+p+' Dh</div> </td>'+
    '<td class="deleteIcon"> <button onclick="deleteRow('+i+')" class="btn btn-outline-danger" width="1em" height="1em" fill="currentColor"><i class="dw dw-delete-2"></i></button>'+
        '<input type="hidden" name="cart['+i+'][3]" value="'+q+'"> </td> </tr>';
    i++;
    n++;
    document.getElementById("numCmd").innerHTML = "Num : "+n;
    document.getElementById("numCmdInput").setAttribute("value",String(n));
  }

}


function deleteRow(i){
  document.getElementById(i).remove();
  let m=document.getElementById("numCmdInput").getAttribute("value");
  document.getElementById("numCmdInput").setAttribute("value",String(parseInt(m-1)));
  document.getElementById("numCmd").innerHTML = "Num : "+(m-1);
  n--;
}

function total(id,prix){
  var qnt,iprix;
    qnt = parseInt(document.getElementById("qnt"+id).value);
    iprix = parseInt(prix);
    document.getElementById("total"+id).innerHTML=String(iprix*qnt)+" Dh";
  } 
 
  function total2(id,prix){
    var qnt,iprix;
    qnt = parseInt(document.getElementById("qnt"+id).value);
    iprix = parseInt(prix);
    return iprix*qnt;
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
	<!-- Datatable Setting js -->
	<script src="../../../deskapp2-master/vendors/scripts/datatable-setting.js"></script>
    
    <!-- bootstrap-touchspin js -->
	<script src="../../../deskapp2-master/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../../../deskapp2-master/vendors/scripts/advanced-components.js"></script>
</body>
</html>