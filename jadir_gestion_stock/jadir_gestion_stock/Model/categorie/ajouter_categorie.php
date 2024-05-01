<?php
require_once ("../verification/verification.php");
extract($_POST);
if (isset($sauvgrader)){
    require_once ("../../Class/class_categorie.php");
    $cli=new categorie(null,$nom_categorie);
    $cli->ajouter_categorie();
}

?>