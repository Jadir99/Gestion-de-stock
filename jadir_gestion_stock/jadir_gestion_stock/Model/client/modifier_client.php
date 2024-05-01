<?php 
require ("../../Class/class_client.php");

// session //
extract($_POST);
extract($_GET);

if (isset($sauvgrader)){
    $cli=new client(null,$nom,$prenom,$email,$adresse,$tele);
    $cli->modifier_client($id_client,$cli);
}else {

}
?>