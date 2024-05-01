<?php 
session_start();


require_once ("../../Class/class_admin.php");
extract($_POST);

if (isset($login)){
$log=new Admin($username,$password);
if ($log->verification( )==1) header("Location:../../Model/Home/index.php?hh=hh");
  $_SESSION['username']=$username;
  $_SESSION['password']=$password;
}

?>
<!-- ici ceci la class de login -->