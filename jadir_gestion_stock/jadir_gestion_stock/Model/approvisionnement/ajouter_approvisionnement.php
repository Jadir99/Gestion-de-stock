<?php
require_once ("../verification/verification.php");


extract($_POST);
if (isset($sauvgarder)){
    // lajout de approvisionnement simple 
    // alert 
    require_once ("../../Class/class_approvisionnement.php");
    $app=new Approvisionnement($num_approvisionnement,'date(y/m/d)',$id_fournisseur);
    // echo $cmd->__get("num_com")==null;
    $app->ajouter_approvisionnement();
    

// l'ajout de ligne d'achat':
// generation des variables
$i=0;

for($i==0;$i<count($quantiti_approvisionnement);$i++){
    if (!empty($quantiti_approvisionnement[$i]) ){
        $prix_ventt[]=$prix_vent[$i];
        $quantit[]=$quantiti_approvisionnement[$i];
        
    }
}
// echo count($quantit);
$i=0;
for($i==0;$i<count($quantit);$i++){
//     echo $quantit[$i]." ";
//     echo $prix_ventt[$i]." ";
    $prix_total[]=intval($prix_ventt[$i])*intval($quantit[$i]);
    // echo $prix_total[$i]." ";
}






require_once ("../../Class/class_achat.php");
require_once ("../../Class/class_produit.php");


$i=0;
for($i==0;$i<count($quantit);$i++){
    $fact=new Achat(null,$produits[$i],$num_approvisionnement,$quantit[$i],$prix_total[$i]);
    $fact->ajouter_achat();
    Produit::plus_quantity($produits[$i],$quantit[$i]);
}
header("table_achats.php");

}


















// echo $quantit[$i]." ";


// echo $produits[0];
// echo $produits[1];
// echo empty($quantit[0]);
// echo count($quantit);
// echo count($reference);
// echo count($quantiti_commande);
// echo count($prix_ventt);





// $i=0;
// for($i==0;$i<count($quantit);$i++){
//     echo "quantiti".$quantit[$i]." reference ";
//     echo $reference[$i]." prix_total";
//     echo $prix_ventt[$i]." ";
//     echo "\n";
// }


    


    
// }

//l'insertion de ligne de commande 










?>