<?php

require_once ("../../DAO/DAO.php");
class Admin{

private $username,$password;

public function __construct($login,$password){
        $this->username=$login;
        $this->password=$password;
}
    // login verification :

        public function verification(){

            $doa=new DAO();
            if ($doa->login($this->username,$this->password)==1) //ici le profile n'est pas la table client
            return 1;
            else 
            header ("Location: ../login/login_form.html");
            
        }
}









?>