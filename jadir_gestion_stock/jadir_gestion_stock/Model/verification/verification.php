<?php
session_start();

include("../../Class/class_admin.php");
if ((!empty($_SESSION['username']))&&!empty($_SESSION['password'])){

    
    $log=new Admin($_SESSION['username'],$_SESSION['password']);
    if(($log->verification())==0) header("location:../login/login_form.html");

}else header("location:../login/login_form.html");

?>