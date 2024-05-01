<?php
require_once ("../verification/verification.php");

extract($_POST);
if (isset($sauvgarder)){
    // lajout de commande simple 
    // alert 
    require_once ("../../Class/class_commande.php");
    $cmd=new Commande($num_commande,'date(y/m/d)',$id_client);
    // echo $cmd->__get("num_com")==null;
    $cmd->ajouter_commande();

// l'ajout de ligne de commande:
// generation des variables
$i=0;

for($i==0;$i<count($quantiti_commande);$i++){
    if (!empty($quantiti_commande[$i]) ){
        $prix_ventt[]=$prix_vent[$i];
        $quantit[]=$quantiti_commande[$i];
        
    }
}

$i=0;
for($i==0;$i<count($quantit);$i++){
//     echo $quantit[$i]." ";
//     echo $prix_ventt[$i]." ";
    $prix_total[]=$prix_ventt[$i]*$quantit[$i];
    // echo $prix_total[$i]." ";
}
// var_dump($prix_total);






require_once ("../../Class/class_ligne_command.php");
require_once ("../../Class/class_produit.php");


    $i=0;
    for($i==0;$i<count($quantit);$i++){
        $fact=new ligne_commande(null,$produits[$i],$num_commande,$quantit[$i],$prix_total[$i]);
        $fact->ajouter_ligne_commande();
        Produit::mine_quantity($produits[$i],$quantit[$i]);

    }
    header("location:facture_commande.php?num_commande=$num_commande");
}
    // echo "<script>alert('la quantiti est sup que nous avons dans le stock'+".$id_client.");</script>";

    























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
// $i=0;
// for($i==0;$i<count($prix_vent);$i++){
    
// }

    


    
// }

//l'insertion de ligne de commande 










?>