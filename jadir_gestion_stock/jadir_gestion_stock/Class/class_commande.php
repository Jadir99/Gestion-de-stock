<?php 

// require_once ("../../DAO/DAO.php");
include ("class_client.php");

class Commande{
private $num_com ;
private $date_com ;
private $id_client ;




// constructure de class commande 
function __construct($num_com,$date_com,$id_client){
    $this->id_client=$id_client;
    $this->num_com = $num_com;
    $this->date_com = $date_com;
}
// function getter
function __get($prop){
    switch($prop){
        case 'num_com':return $this->num_com ;break;
        case 'date_com':return $this->date_com;break;
        case 'id_client':return $this->id_client ;break;
    }

}

// setter 
 function __set($prop,$val){

    switch($prop){
        case 'num_com': $this->num_com=$val ;break;
        case 'date_com': $this->date_com=$val;break;
        case 'id_client': $this->id_client=$val ;break;
        
    }
 }
//return ici
// public static function  afficher_commande(){
//     $doa=new DAO();
//     $commandes=$doa->afficher_commande();
//     return $commandes;
// }

// ajouter un commande en
function ajouter_commande(){
    $doa=new DAO();
    $doa->sauvgarde_commande($this);
    
    // if($doa->sauvgarde_commande($this))
    // header("location: ../Model/commande/table_commande.php");
}

// // supprimer un commande p
// public static function supprimer_commande($ref){
//     $doa=new DAO();
//     $doa->delete_commande($ref);
//     header("location: ../commande/table_commande.php");
// }
// //modification un commande 

// public static function modifier_commande($ref, $commande){
//     $doa=new DAO();
//     $doa->update_commande($ref,$commande);
//     // header("location: ../Model/commande/table_commande.php");
// }

// count of commandes :
public static function count_commandes(){
    $doa=new DAO();
    return $doa->count_commande();
}
   

}








?>