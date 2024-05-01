<?php 

require_once ("../../DAO/DAO.php");

class Approvisionnement{
private $num_app ;
private $date_app ;
private $id_fournisseur ;
private $nom_fournisseur ;




// constructure de class approvisionnement 
function __construct($num_app,$date_app,$id_fournisseur){
    $this->id_fournisseur=$id_fournisseur;
    $this->num_app = $num_app;
    $this->date_app = $date_app;
}
// function getter
function __get($prop){
    switch($prop){
        case 'num_app':return $this->num_app ;break;
        case 'date_app':return $this->date_app;break;
        case 'id_fournisseur':return $this->id_fournisseur ;break;
    }

}

// setter 
 function __set($prop,$val){

    switch($prop){
        case 'num_app': $this->num_app=$val ;break;
        case 'date_app': $this->date_app=$val;break;
        case 'id_fournisseur': $this->id_fournisseur=$val ;break;
        
    }
 }
//return ici
// public static function  afficher_approvisionnement(){
//     $doa=new DAO();
//     $approvisionnements=$doa->afficher_approvisionnement();
//     return $approvisionnements;
// }

// ajouter un approvisionnement en
function ajouter_approvisionnement(){
    $doa=new DAO();
    $doa->sauvgarde_approvisionnement($this);
    echo $this->id_fournisseur;
    
    // if($doa->sauvgarde_approvisionnement($this))
    // header("location: ../Model/approvisionnement/table_approvisionnement.php");
}

// // supprimer un approvisionnement p
// public static function supprimer_approvisionnement($ref){
//     $doa=new DAO();
//     $doa->delete_approvisionnement($ref);
//     header("location: ../approvisionnement/table_approvisionnement.php");
// }
// //modification un approvisionnement 

// public static function modifier_approvisionnement($ref, $approvisionnement){
//     $doa=new DAO();
//     $doa->update_approvisionnement($ref,$approvisionnement);
//     // header("location: ../Model/approvisionnement/table_approvisionnement.php");
// }

// count des clients
public static function count_achats(){
    $doa=new DAO();
    return $doa->count_achats();
}
}








?>