<?php 
require_once ("../../DAO/DAO.php");
class Produit{
private $reference ;
private $quantite_stock;
private $prix_Unitair;
private $libelle,$image,$description,$nom_categorie;
private $prix_achat;
private $prix_vent,$id_categorie;


// constructure de class produit 
function __construct($reference ,$lib,$prix,$q_stock,$prix_acha,$prix_ven,$imag,$descriptio,$nom_categori,$id_categori){

    $this->reference =$reference ;
    $this->quantite_stock=$q_stock;
    $this->prix_Unitair=$prix;
    $this->libelle=$lib;
    $this->nom_categorie=$nom_categori;
    $this->prix_achat=$prix_acha;
    $this->prix_vent=$prix_ven;
    $this->image=$imag;
    $this->id_categorie=$id_categori;
    $this->description=$descriptio;
    
}
// function getter
function __get($prop){
    switch($prop){
        case 'reference':return $this->reference ;break;
        case 'quantite_stock':return $this->quantite_stock;break;
        case 'prix_Unitair':return $this->prix_Unitair;break;
        case 'libelle' :return $this->libelle;break;
        case 'nom_categorie' :return $this->nom_categorie;break;
        case 'prix_achat' :return $this->prix_achat;break;
        case 'prix_vent' :return $this->prix_vent;break;
        case 'image' :return $this->image;break;
        case 'id_categorie' :return $this->id_categorie;break;
        case 'description' :return $this->description;break;
    }

}

// setter 
 function __set($prop,$val){

    switch($prop){
        case 'reference': $this->reference=$val ;break;
        case 'quantite_stock': $this->quantite_stock=$val; break;
        case 'prix_Unitair': $this->prix_Unitair=$val; break;
        case 'libelle' : $this->libelle=$val;break;
        case 'nom_categorie' : $this->nom_categorie;break;
        case 'prix_achat' : $this->prix_achat=$val; break;
        case 'prix_vent' : $this->prix_vent=$val; break;
        case 'image' : $this->image=$val; break;
        case 'id_categoriee' :$this->id_categorie=$val;break;
        case 'description' : $this->description=$val; break;
    }
 }
//return ici
 static function  afficher_produit(){
    $doa=new DAO();
    $produits=$doa->afficher_produit();
    return $produits;
}

// ajouter un produit en
function ajouter_produit(){
    $doa=new DAO();
    $doa->sauvgarde_produit($this);
    // echo $this->libelle;echo "$";
    // echo $this->prix_achat;echo "$";
    // echo $this->prix_vent;echo "$";
    // echo $this->prix_Unitair;echo "$";
    // echo $this->quantite_stock;echo "$";
    // echo $this->image;echo "$";
    // echo $this->description;echo "$";
    // echo $this->id_categorie;echo "$";
    // if ($doa->sauvgarde_produit($this)==true)
    header("location: ../produit/table_produit.php?ajouter=succes");
}
public static function get_produits($ref){
    $doa=new DAO();
    return $doa->get_produit($ref);
}
public static function get_produits_bycategorie($categorie){
    $doa=new DAO();
    return $doa->get_produits_bycategorie($categorie);
}


// supprimer un produit p
public static function supprimer_produit($ref){
    $doa=new DAO();
    $doa->delete_produit($ref);
    header("location: ../produit/table_produit.php?delete=succes");
}
//modification un produit 

public static function modifier_produit($ref, $produit){
    $doa=new DAO();
        // echo $produit->libelle;
    $doa->update_produit($ref,$produit);
    header("location: ../produit/table_produit.php?update=succes");
}
// modification de stock 
public static function mine_quantity($ref,$qua){
    $doa=new DAO();
    $doa->mine_quantity($ref,$qua);
} 
public static function plus_quantity($ref,$qua){
    $doa=new DAO();
    $doa->plus_quantity($ref,$qua);
} 


}









?>