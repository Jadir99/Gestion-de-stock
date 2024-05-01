<?php
require_once ("../../DAO/DAO.php");
class fournisseur {
    private $nom_for;
    private $prenom_for;
    private $email_for;
    private $adresse_for,$tele_for,$id_for;
    
// constucture de client
    function __construct($id_for,$n, $p,$em,$adr,$tele){
        $this->nom_for=$n;
        $this->prenom_for=$p;
        $this->email_for=$em;
        $this->adresse_for=$adr;
        $this->tele_for=$tele;
        $this->id_for=$id_for;
    }

// le getter
public function __get($prop){
    switch($prop){
    case 'nom_for': return $this->nom_for ; break;
    case 'prenom_for':return $this->prenom_for;  break;
    case 'email_for': return $this->email_for;  break;
    case 'adresse_for': return $this->adresse_for;  break;
    case 'tele_for': return $this->tele_for; break;
    case 'id_for': return $this->id_for; break;
    default : return false; break ;

    }
    }
// le setter

    public function  __set($prop,$val){

        switch($prop){
            case 'nom_for':  $this->nom_for=$val ; break;
            case 'prenom_for': $this->prenom_for=$val;  break;
            case 'email_for':  $this->email_for=$val;  break;
            case 'adresse_for': $this->adresse_for=$val;  break;
            case 'id_for':  $this->id_for_for=$val; break;
            case 'tele_for':  $this->tele_for=$val; break;
            default : return false; break;
            
            }
    }


// ajouter un fournisseur
    public function ajouter_fournisseur(){
        $doa=new DAO();
        $doa->sauvgarde_fournisseur($this);
        header("location: table_fournisseur.php?ajouter=succes");
        //  echo "Tfoo";//error 404 page !! les exceptions ????????
    }
    public static function  afficher_fournisseur(){
        $doa=new DAO();
        $fournisseurs=$doa->afficher_fournisseur();
        return $fournisseurs;
    }
// supprimer un fournisseur p
public static function supprimer_fournisseur($id){
    $doa=new DAO();
    $doa->delete_fournisseur($id);
    header("location: table_fournisseur.php?delete=succes");
}
//modification un fournisseur 

public static function modifier_fournisseur($id, $fournisseur){
    $doa=new DAO();
    $doa->update_fournisseur($id,$fournisseur);
    header("location: table_fournisseur.php?update==succes");
}
public static function count_fournisseur(){
    $doa=new DAO();
    return $doa->count_fournisseur();
}

}
?>