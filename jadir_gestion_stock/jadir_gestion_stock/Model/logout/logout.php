<?php
session_start();


if ((!empty($_SESSION['username']))&&!empty($_SESSION['password'])){

    

    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header ("Location: ../login/login_form.html");
}
header ("Location: ../login/login_form.html");

?>
