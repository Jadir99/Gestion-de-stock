<?php 
class DAO {

    private $pdo;
    
    function __construct(){
        $this->pdo=new PDO("mysql:host=localhost;dbname=projet_gestion_stock",'root','');
    }



    /////*************************************************************login************************************* */


    //function return les admins
function login($login,$password){
    $req=($this->pdo)->query("SELECT * FROM admin where username='$login' and password='$password'");
    $req=$req->fetch(PDO::FETCH_ASSOC); 
    if ($req) return 1;
    else return 0;
}

    
/////*************************************************************client************************************* */




// cheki si un client existe :

public function chick_client($id){
    $req=$this->pdo->query("SELECT * FROM client where id_client='$id'");
    $req=$req->fetch(PDO::FETCH_ASSOC); 
    if ($req) return 1;
    else return 0;///"3YAAAAAAAAAAAAAAAAAAN
}







// get client information :

    public  function get_client($id){
        $client="SELECT * from client where id_client=$id";
        $client=($this->pdo)->query($client);
        $clients=[];
        $row=$client->fetch();
        $clients[]=new client($row['id_client'],$row['nom'],$row['prenom'],$row['email'],$row['adresse'],$row['tele']);
        
        return $clients;
    }

// affichage
function afficher_client(){
    $client="SELECT * from client  ";
   $client=($this->pdo)->query($client);
   $clients = [];
   while($row=$client->fetch()){
       $clients[]=new client($row['id_client'],$row['nom'],$row['prenom'],$row['email'],$row['adresse'],$row['tele']);
   }
   return $clients;
}



    function sauvgarde_client($client) {
    $req=$this->pdo->query("INSERT into client values (null,'".$client->nom."','".$client->prenom."','".$client->adresse."','".$client->email."','".$client->tele."')");
    if ($req)return true;return false;
}

//supression :

public function delete($id){
$this->pdo->query("DELETE FROM `client` WHERE `client`.`id_client` = '$id'");
}
//update

public function update_client($id,$client){
    $res=("UPDATE client set nom='".$client->nom."',prenom='".$client->prenom."',adresse='".$client->adresse."',email='".$client->email."',tele='".$client->tele."' WHERE `client`.`id_client` = '$id'");
    $this->pdo->query($res);
}

// count of commande
public function count_clients(){
    $req=$this->pdo->query("SELECT count(*) FROM `client`");
    $total_client = $req->fetch();
    $total_client[] = $total_client;
    return $total_client;
}

/////*************************************************************categorie************************************* */


// cheki si un categorie existe :

public function chick_categorie($id){
    $req=$this->pdo->query("SELECT * FROM categorie where id_cat='$id'");
    $req=$req->fetch(PDO::FETCH_ASSOC); 
    if ($req) return 1;
    else return 0;///"3YAAAAAAAAAAAAAAAAAAN
}







// get categorie information :

    function get_categorie($id){
        $categorie="SELECT * from categorie where id_cat=$id";
        $categorie=($this->pdo)->query($categorie);
        while($row=$categorie->fetch()){
            $categories[]=new categorie($row['id_categorie'],$row['nom_categorie']);
        }
        return $categories;
    }

// affichage
function afficher_categorie(){
    $categorie="SELECT * from categorie  ";
   $categorie=($this->pdo)->query($categorie);
   $categories = [];
   while($row=$categorie->fetch()){
       $categories[]=new categorie($row['id_cat'],$row['nom_cat']);
   }
   return $categories;
}



    function sauvgarde_categorie($categorie) {
    $req=$this->pdo->query("INSERT into categorie values (null,'".$categorie->nom_categorie."' )");
    if ($req)return true;return false;
}

//supression :

public function delete_categorie($id){
$this->pdo->query("DELETE FROM `categorie` WHERE `categorie`.`id_cat` = '$id'");
}
//update

public function update_categorie($id,$categorie){
    $res=("UPDATE categorie set nom_cat='".$categorie->nom_categorie."' WHERE `categorie`.`id_cat` = '$id'");
    $this->pdo->query($res);
}















/////*************************************************************fournisseur************************************* */




// cheki si un fournisseur existe :

public function chick_fournisseur($id){
    $req=$this->pdo->query("SELECT * FROM fournisseur where id_for='$id'");
    $req=$req->fetch(PDO::FETCH_ASSOC); 
    if ($req) return 1;
    else return 0;///"3YAAAAAAAAAAAAAAAAAAN
}







// get client information :

    function get_fournisseur($id){
        $fournisseur="SELECT * from fournisseur where id_for=$id";
        $fournisseur=($this->pdo)->query($fournisseur);
        while($row=$fournisseur->fetch()){
            $fournisseurs[]=new fournisseur($row['id_for'],$row['nom_for'],$row['prenom_for'],$row['email_for'],$row['adresse_for'],$row['tele_for']);
        }
        return $fournisseurs;
    }

// affichage
function afficher_fournisseur(){
    $fournisseur="SELECT * from fournisseur  ";
   $fournisseur=($this->pdo)->query($fournisseur);
   $fournisseurs = [];
   while($row=$fournisseur->fetch()){
       $fournisseurs[]=new fournisseur($row['id_for'],$row['nom_for'],$row['prenom_for'],$row['email_for'],$row['adresse_for'],$row['tele_for']);
   }
   return $fournisseurs;
}



    function sauvgarde_fournisseur($fournisseur) {
    $req=$this->pdo->query("INSERT into fournisseur values (null,'".$fournisseur->nom_for."','".$fournisseur->prenom_for."','".$fournisseur->adresse_for."','".$fournisseur->email_for."','".$fournisseur->tele_for."')");
    if ($req)return true;return false;
}

//supression :

public function delete_fournisseur($id){
$this->pdo->query("DELETE FROM `fournisseur` WHERE `fournisseur`.`id_for` = '$id'");
}
//update

public function update_fournisseur($id,$fournisseur){
    $res=("UPDATE fournisseur set nom_for='".$fournisseur->nom_for."',prenom_for='".$fournisseur->prenom_for."',adresse_for='".$fournisseur->adresse_for."',email_for='".$fournisseur->email_for."',tele_for='".$fournisseur->tele_for."' WHERE `fournisseur`.`id_for` = '$id'");
    $this->pdo->query($res);
}
public function count_fournisseur(){
        $req=$this->pdo->query("SELECT count(*) FROM `fournisseur` WHERE 1");
        $nbr_fournisseur = $req->fetch();
        $nbr_fournisseur[] = $nbr_fournisseur;
        return $nbr_fournisseur;
}




/////*************************************************************produit************************************* */
// get produit
function get_produit($ref){
    $produit="SELECT * from produit natural join categorie  where  	reference=$ref";
    $produit=($this->pdo)->query($produit);


    while($row=$produit->fetch()){
        $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
        $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
     }
    return $produits;
}
// get produits by categorie:
function get_produits_bycategorie($cat){
    $produit="SELECT * from produit   natural join categorie where id_cat=$cat";
    $produit=($this->pdo)->query($produit);


    while($row=$produit->fetch()){
        $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
        $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
     }
    return $produits;
}

// affichage
function afficher_produit(){
$produit="SELECT * from produit  natural join categorie ";
$produit=($this->pdo)->query($produit);
$produits = [];
while($row=$produit->fetch()){
   $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
   $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
}
return $produits;
}

//TO DOO :u have to finish and think about algorithm for this shittt

function sauvgarde_produit($produit) {
    
    


    // echo $produit->libelle;echo "$";
    // echo $produit->prix_achat;echo "$";
    // echo $produit->prix_vent;echo "$";
    // echo $produit->prix_Unitair;echo "$";
    // echo $produit->quantite_stock;echo "$";
    // echo $produit->image;echo "$";
    // echo $produit->__get("description");echo "$";
    // echo $produit->__get("id_categorie");echo "$";


$req=("INSERT into produit values (null,'".$produit->libelle."','$produit->prix_Unitair','$produit->quantite_stock',
    '".$produit->prix_achat."','".$produit->prix_vent."','".$produit->description."'
    ,'".$produit->image."','".$produit->id_categorie."')");
$req=$this->pdo->query($req);
if (!empty($req))return true;return false;
}
//supression :

public function delete_produit($ref){
    $this->pdo->query("DELETE FROM `produit` WHERE `produit`.`reference` = '$ref'");
    }
    //update
    
    public function update_produit($ref,$produit){
    //     echo $produit->libelle;echo "$";
    // echo $produit->prix_achat;echo "$";
    // echo $produit->prix_vent;echo "$";
    // echo $produit->prix_Unitair;echo "$";
    // echo $produit->quantite_stock;echo "$";
    // echo $produit->image;echo "$";
    // echo $produit->__get("description");echo "$";
    // echo $produit->__get("id_categorie");echo "$";


        $res=("UPDATE produit set libelle='".$produit->libelle."',prix_Unitair='$produit->prix_Unitair',quantite_stock='$produit->quantite_stock' 
        ,prix_achat = '".$produit->prix_achat."',prix_vent='".$produit->prix_vent."',description = '".$produit->description."'
    ,img='".$produit->image."',id_cat='".$produit->id_categorie."'
        WHERE `produit`.`reference` = '$ref' ");
        $this->pdo->query($res);
    }


/////*************************************************************Commande************************************* */

// get commande
public function get_commande($num){
    $commande="SELECT * from commande where numero_comande=$num";
    $commande=($this->pdo)->query($commande);
    return $commande->fetch();
}

// // affichage
// function afficher_commande(){
// $commande="SELECT * from commande ";
// $commande=($this->pdo)->query($commande);
// $commandes = [];
// while($row=$commande->fetch()){
//    $commandes[]=new commande($row['date_commande'],$row['id_fournisseur']);
// }
// return $commandes;
// }



function sauvgarde_commande($commande) {
    $now=date("Y/m/d");
    $req="INSERT into commande2  values ('$commande->num_com','$commande->id_client','$now')";
    // echo $commande->num_com;
    $req=($this->pdo)->query($req);
    if ($req)return true;return false;
}

// count of money
public function count_money(){
    $req=$this->pdo->query("SELECT sum(prix_totale) FROM `detail`");
    $total = $req->fetch();
    $total[] = $total;
    return $total;
}


//**********************************************ligne de commande : *****************************************/


//  affichage des ligne des commandes 
// function afficher_ligne_commande(){
// $produit="SELECT * from produit  natural join categorie ";
// $produit=($this->pdo)->query($produit);
// $produits = [];
// while($row=$produit->fetch()){
//    $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
//    $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
// }
// return $produits;
// }

//TO DOO :u have to finish and think about algorithm for this shittt

function sauvgarde_ligne_commande($lc) {
$req=("INSERT into detail values (null,'$lc->reference','$lc->num_commande','$lc->quantiti_commande','$lc->prix_totale')");
$req=$this->pdo->query($req);
if (!empty($req))return true;return false;
}


// get commande for facture
public function get_commande_detail($num){
    $detail="SELECT libelle,nom,prenom,date_commande,prix_vent,prix_totale,quantiti_commande,adresse,tele from detail natural join commande2 natural join produit natural join client where num_com='$num'";
    $detail=($this->pdo)->query($detail);
    $details=[];
    while ($row =$detail->fetch()){
      $details[]=new ALL(NULL,$row['libelle'],$row['prenom'],$row['nom'],$row['date_commande'],$row['quantiti_commande'],$row['prix_totale'],$row['prix_vent'],$row['adresse'],$row['tele']);
    }
    return $details;
    
}

// pour la tables des commandes  
    public function get_all_commandes(){
        $detail="select num_com,nom,prenom,date_commande from commande2 natural join  client  ";
        $detail =$this->pdo->query($detail);
        $details=[];
        while ($row =$detail->fetch()){
            $details[]=new ALL($row['num_com'],null,$row['prenom'],$row['nom'],$row['date_commande'],null,null,null,null,null);
          }
          return $details;
    }




// count of commande
public function count_commande(){
    $req=$this->pdo->query("SELECT count(*) FROM `commande2`");
    $total_commande = $req->fetch();
    $total_commande[] = $total_commande;
    return $total_commande;
}


    // *****************************************^*achats******************************^


    public function get_all_achats(){
        $detail="select id_apro,nom_for,prenom_for,date_apro from approvisionnement2 natural join  fournisseur  ";
        $detail =$this->pdo->query($detail);
        $details=[];
        while ($row =$detail->fetch()){
            $details[]=new ALL($row['id_apro'],null,$row['prenom_for'],$row['nom_for'],$row['date_apro'],null,null,null,null,null);
          }
          return $details;
    }

    // get achat for facture
public function get_achat_detail($num){
    $achat="SELECT libelle,nom_for,prenom_for,date_apro,prix_vent,prix_totale,quantiti_achat,adresse_for,tele_for from achat natural join approvisionnement2 
    natural join produit natural join fournisseur where num_apro='$num' and id_apro='$num'";
    $achat=($this->pdo)->query($achat);
    $achats=[];
    while ($row =$achat->fetch()){
      $achats[]=new ALL(NULL,$row['libelle'],$row['prenom_for'],$row['nom_for'],$row['date_apro'],$row['quantiti_achat'],$row['prix_totale'],$row['prix_vent'],$row['adresse_for'],$row['tele_for']);
    }
    return $achats;
    
}


// count of commande
public function count_achats(){
    $req=$this->pdo->query("SELECT count(*) FROM `approvisionnement2`");
    $total_achats = $req->fetch();
    $total_achats[] = $total_achats;
    return $total_achats;
}







// function afficher_produit(){
//     $produit="SELECT * from produit  natural join categorie ";
//     $produit=($this->pdo)->query($produit);
//     $produits = [];
//     while($row=$produit->fetch()){
//        $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
//        $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
//     }
//     return $produits;
//     }










//********************************************** approvisionnement *****************************************/
// get approvisionnement
// public function get_approvisionnement($num){
//     $approvisionnement="SELECT * from approvisionnement where numero_comande=$num";
//     $approvisionnement=($this->pdo)->query($approvisionnement);
//     return $approvisionnement->fetch();
// }

// // affichage
// function afficher_approvisionnement(){
// $approvisionnement="SELECT * from approvisionnement ";
// $approvisionnement=($this->pdo)->query($approvisionnement);
// $approvisionnements = [];
// while($row=$approvisionnement->fetch()){
//    $approvisionnements[]=new approvisionnement($row['date_approvisionnement'],$row['id_fournisseur']);
// }
// return $approvisionnements;
// }

function sauvgarde_approvisionnement($approvisionnement) {
    $now=date("Y/m/d");
    echo $approvisionnement->num_app.",".$approvisionnement->id_fournisseur;

    $req="INSERT into approvisionnement2  values ('$approvisionnement->num_app','$now','$approvisionnement->id_fournisseur')";
    $req=($this->pdo)->query($req);
    if ($req)return true;return false;
}



//**********************************************achat: *****************************************/


//  affichage des ligne des achats 
// function afficher_ligne_achat(){
// $produit="SELECT * from produit  natural join categorie ";
// $produit=($this->pdo)->query($produit);
// $produits = [];
// while($row=$produit->fetch()){
//    $produits[]=new Produit($row['reference'],$row['libelle'],$row['prix_Unitair'],$row['quantite_stock'],
//    $row['prix_achat'],$row['prix_vent'],$row['img'],$row['description'],$row['nom_cat'],$row['id_cat']);
// }
// return $produits;
// }

//TO DOO :u have to finish and think about algorithm for this shittt

function sauvgarde_achat($lc) {

    
    echo $lc->reference.','.$lc->num_approvisionnement.','.$lc->prix_totale.','.$lc->quantiti_approvisionnement;

    $req=("INSERT into achat values ('$lc->num_achat','$lc->reference','$lc->num_approvisionnement','$lc->prix_totale','$lc->quantiti_approvisionnement')");
    $req=$this->pdo->query($req);
    if (!empty($req))return true;return false;
    }

    //modification de stock de
public function mine_quantity($ref,$new_q){
    $res=("UPDATE produit set quantite_stock=quantite_stock-$new_q where reference='$ref'");
    $this->pdo->query($res);
}

    //modification de stock de
    public function plus_quantity($ref,$new_q){
        $res=("UPDATE produit set quantite_stock=quantite_stock+$new_q where reference='$ref'");
        $this->pdo->query($res);
    }
    

}



?>