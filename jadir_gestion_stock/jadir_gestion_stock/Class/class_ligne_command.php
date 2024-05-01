<?php 
require_once ("../../DAO/DAO.php");
class ligne_commande{
private $num_ligne_commande ;
private $refernece;
private $quantiti_commande;
private $num_commande;
private $prix_totale;


// constructure de class ligne_commande 
function __construct($num_ligne_commande,$reference,$num_commande,$quantiti_commande,$prix_totale){

    $this->num_ligne_commande =$num_ligne_commande ;
    $this->reference =$reference ;
    $this->num_commande =$num_commande ;
    $this->quantiti_commande =$quantiti_commande ;
    $this->prix_totale =$prix_totale ;  
}
// function getter
function __get($prop){
    switch($prop){
        case 'reference':return $this->reference ;break;
        case 'quantiti_commande':return $this->quantiti_commande;break;
        case 'prix_totale':return $this->prix_totale;break;
        case 'num_ligne_commande':return $this->num_ligne_commande;break;
        
        case 'num_commande' :return $this->num_commande;break;
       
    }

}

// setter 
 function __set($prop,$val){

    switch($prop){
        case 'reference': $this->reference=$val ;break;
        case 'quantiti_commande': $this->quantiti_commande=$val;break;
        case 'prix_totale': $this->prix_totale=$val;break;
        
        case 'num_commande' : $this->num_commande=$val;break;
    }
 }
// //return ici
//  static function  afficher_ligne_commande(){
//     $doa=new DAO();
//     $ligne_commandes=$doa->afficher_ligne_commande();
//     return $ligne_commandes;
// }

// ajouter un ligne_commande en
function ajouter_ligne_commande(){
    $doa=new DAO();
    $doa->sauvgarde_ligne_commande($this);
   
   // header("location: ../ligne_commande/table_ligne_commande.php");
}

// // supprimer un ligne_commande p
// public static function supprimer_ligne_commande($ref){
//     $doa=new DAO();
//     $doa->delete_ligne_commande($ref);
//     header("location: ../ligne_commande/table_ligne_commande.php");
// }

public static function get_detail($num){
    $doa=new DAO();
    return $doa->get_commande_detail($num);
}

public static function count_money(){
    $doa=new DAO();
    return $doa->count_money();
}

}








?>