<?php
require_once ("../verification/verification.php");
//condition de suvgarder
extract($_POST);
if (isset($sauvgarder)){
  // var_dump($_POST);
  // echo $num_commande;

      require_once ("../../Class/class_commande.php");
      require_once ("../../Class/class_produit.php");
      require("../../Class/class_ligne_command.php");
      

      //ajouter un commande
  $cmd=new Commande($num_commande,'date(y/m/d)',$id_client);
      // echo $cmd->__get("num_com")==null;
      $cmd->ajouter_commande();






      
    foreach($cart as $c){
      $fact=new ligne_commande(null,$c[0],$num_commande,$c[2],$c[2]*$c[1]);
      $fact->ajouter_ligne_commande();
      Produit::mine_quantity($c[0],$c[2]);
    }


    header("Location:facture_commande.php?num_commande=$num_commande");
}


?>

