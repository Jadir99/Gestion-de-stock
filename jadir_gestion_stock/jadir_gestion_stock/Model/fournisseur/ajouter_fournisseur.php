<?php

extract($_POST);
if (isset($sauvgrader)){
    include ("../../Class/class_fournisseur.php");
    $cli=new fournisseur(null,$nom,$prenom,$email,$adresse,$tele);
    $cli->ajouter_fournisseur();
    
}

?>