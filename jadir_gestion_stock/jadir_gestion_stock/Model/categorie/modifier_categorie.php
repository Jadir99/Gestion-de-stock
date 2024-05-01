<?php 
require_once ("../verification/verification.php");
require ("../../Class/class_categorie.php");

// session //
extract($_POST);
extract($_GET);

if (isset($sauvgrader)){
    $cat=new categorie(null,$nom_categorie);
    $cat->modifier_categorie($id_categorie,$cat);
}else {

}
?>