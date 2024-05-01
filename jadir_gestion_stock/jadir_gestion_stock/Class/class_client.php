<?php
require_once ("../../DAO/DAO.php");

class client {
    private $nom;
    private $prenom;
    private $email;
    private $adresse,$tele,$id_client;
    
// constucture de client
    function __construct($id_client,$n, $p,$em,$adr,$tele){
        $this->nom=$n;
        $this->prenom=$p;
        $this->email=$em;
        $this->adresse=$adr;
        $this->tele=$tele;
        $this->id_client=$id_client;
    }

// le getter
public function __get($prop){
    switch($prop){
    case 'nom': return $this->nom ; break;
    case 'prenom':return $this->prenom;  break;
    case 'email': return $this->email;  break;
    case 'adresse': return $this->adresse;  break;
    case 'tele': return $this->tele; break;
    case 'id_client': return $this->id_client; break;
    default : return false; break ;

    }
    }
// le setter

    public function  __set($prop,$val){

        switch($prop){
            case 'nom':  $this->nom=$val ; break;
            case 'prenom': $this->prenom=$val;  break;
            case 'email':  $this->email=$val;  break;
            case 'adresse': $this->adresse=$val;  break;
            case 'id_client':  $this->id_client=$val; break;
            case 'tele':  $this->tele=$val; break;
            default : return false; break;
            
            }
    }


// ajouter un client
    public function ajouter_client(){
        $doa=new DAO();
        $doa->sauvgarde_client($this);
        header("location: table_client.php?ajouter==succes");
        //  echo "Tfoo";//error 404 page !!
    }
    public static function  afficher_client(){
        $doa=new DAO();
        $clients=$doa->afficher_client();
        return $clients;
    }
// supprimer un client p
public static function supprimer_client($id){
    $doa=new DAO();
    $doa->delete($id);
    header("location: table_client.php?delete=succes");
}
//modification un client 

public static function modifier_client($id, $client){
    $doa=new DAO();
    $doa->update_client($id,$client);
    header("location: table_client.php?update=succes");
}

//get client pour les autres tables 

public static function get_client($id_client){
    $doa=new DAO();
    return $doa->get_client($id_client);
}


// count des clients
public static function count_clients(){
    $doa=new DAO();
    return $doa->count_clients();
}

}
?>