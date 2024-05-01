<?php

extract($_POST);
if (isset($sauvgrader)){
    include ("../../Class/class_client.php");
    $cli=new client(null,$nom,$prenom,$email,$adresse,$tele);
    $cli->ajouter_client();
    
}

?>