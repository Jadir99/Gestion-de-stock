<?php 
require_once ("../../DAO/DAO.php");
class Achat{
private $num_achat;
private $refernece;
private $quantiti_approvisionnement;
private $num_approvisionnement;
private $prix_totale;


// constructure de class achat 
function __construct($num_achat,$reference,$num_approvisionnement,$quantiti_approvisionnement,$prix_totale){

    $this->num_achat =$num_achat ;
    $this->reference =$reference ;
    $this->num_approvisionnement =$num_approvisionnement ;
    $this->quantiti_approvisionnement =$quantiti_approvisionnement ;
    $this->prix_totale =$prix_totale ;  
}
// function getter
function __get($prop){
    switch($prop){
        case 'reference':return $this->reference ;break;
        case 'quantiti_approvisionnement':return $this->quantiti_approvisionnement;break;
        case 'prix_totale':return $this->prix_totale;break;
        
        case 'num_approvisionnement' :return $this->num_approvisionnement;break;
       
    }

}

// setter 
 function __set($prop,$val){

    switch($prop){
        case 'reference': $this->reference=$val ;break;
        case 'quantiti_approvisionnement': $this->quantiti_approvisionnement=$val;break;
        case 'prix_totale': $this->prix_totale=$val;break;
        
        case 'num_approvisionnement' : $this->num_approvisionnement=$val;break;
    }
 }
// //return ici
//  static function  afficher_achat(){
//     $doa=new DAO();
//     $achats=$doa->afficher_achat();
//     return $achats;
// }

// ajouter un achat en
function ajouter_achat(){
    $doa=new DAO();
    $doa->sauvgarde_achat($this);
   
   // header("location: ../achat/table_achat.php");
}

// // supprimer un achat p
// public static function supprimer_achat($ref){
//     $doa=new DAO();
//     $doa->delete_achat($ref);
//     header("location: ../achat/table_achat.php");
// }

}








?>