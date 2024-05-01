<?php
require_once ("../verification/verification.php");
// session !!!!!
extract($_GET);
include_once("../../Class/class_categorie.php");
try{
categorie::supprimer_categorie($id_categorie);
}catch(Exception $e){
    header("Location:../Exception/404.html");
}

?>