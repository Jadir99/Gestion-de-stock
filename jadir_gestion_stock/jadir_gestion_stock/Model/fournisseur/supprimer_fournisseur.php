<?php
// session !!!!!
extract($_GET);
include_once("../../Class/class_fournisseur.php");
try{
    fournisseur::supprimer_fournisseur($id_for);
    }catch(Exception $e){
        header("Location:../Exception/404.html");
    }
    
?>