<?php 
require_once ("../../DAO/DAO.php");
class ALL{
private $libelle ;
private $numero_commande ;
private $prenom ;
private $nom ;
private $date_commande;
private $quantiti_commande;
private $prix_vent;
private $prix_totale;
private $adresse;
private $tele;


function __get($prop){
    switch($prop){
        case 'prix_vent' :return $this->prix_vent;break;
        case 'numero_commande' :return $this->numero_commande;break;
        case 'libelle' :return $this->libelle;break;
        case 'prenom' :return $this->prenom;break;
        case 'nom' :return $this->nom;break;
        case 'date_commande' :return $this->date_commande;break;
        case 'quantiti_commande' :return $this->quantiti_commande;break;
        case 'prix_totale' :return $this->prix_totale;break;
        case 'adresse' :return $this->adresse;break;
        case 'tele' :return $this->tele;break;
    }

}


// constructure de class ligne_commande 
function __construct($numero_commande,$libelle, $prenom,$nom,$date_commande,$quantiti_commande,$prix_totale,$prix_vent,$adresse,$tele){

    $this->libelle=$libelle;
    $this->numero_commande=$numero_commande;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->date_commande=$date_commande;
    $this->prix_vent=$prix_vent;
    $this->adresse=$adresse;
    $this->tele=$tele;
    $this->quantiti_commande =$quantiti_commande ;
    $this->prix_totale =$prix_totale ;  
}
public static function get_commande_detail($num){
    $doa=new DAO();
    return $doa->get_commande_detail($num);
    // $i=0;
    // foreach($ana as $row){
    //     echo $row->__get("nom");
    // }
}

public static function gat_all_commandes(){
    $doa=new DAO();
    return $doa->get_all_commandes();
}
public static function gat_all_achats(){
    $doa=new DAO();
    return $doa->get_all_achats();
}

public static function get_achat_detail($num){
    $doa=new DAO();
    return $doa->get_achat_detail($num);
    // $i=0;
    // foreach($ana as $row){
    //     echo $row->__get("nom");
    // }
}













}









?>