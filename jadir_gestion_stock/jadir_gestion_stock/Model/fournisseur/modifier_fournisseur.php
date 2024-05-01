<?php 
require_once ("../../Class/class_fournisseur.php");

// session //
extract($_POST);
extract($_GET);

if (isset($sauvgrader)){
    
    $fournisseur=new fournisseur(null,$nom,$prenom,$email,$adresse,$tele);
    $fournisseur->modifier_fournisseur($id_for,$fournisseur);
}else {

}
?>