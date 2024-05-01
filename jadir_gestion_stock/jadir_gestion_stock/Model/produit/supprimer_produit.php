<?php
// session !!!!!
extract($_GET);
include_once("../../Class/class_produit.php");
// echo $reference;

try{
    produit::supprimer_produit($reference);
    }catch(Exception $e){
        header("Location:../Exception/404.html");
    }
    
?>