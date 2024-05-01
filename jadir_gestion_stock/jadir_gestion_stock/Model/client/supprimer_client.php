<?php
// session !!!!!
extract($_GET);
include_once("../../Class/class_client.php");
try{
    client::supprimer_client($id_client);
    }catch(Exception $e){
        header("Location:../Exception/404.html");
    }
    
?>