<?php
require_once ("../../DAO/DAO.php");
class categorie {
    private $id_categorie;
    private $nom_categorie;
   
    
// constucture de categorie
    function __construct($id_categorie,$nom_categorie){
        $this->nom_categorie=$nom_categorie;
        
        $this->id_categorie=$id_categorie;
    }

// le getter
public function __get($prop){
    switch($prop){
    case 'nom_categorie': return $this->nom_categorie ; break;
    case 'id_categorie': return $this->id_categorie; break;
    default : return false; break ;

    }
    }
// le setter

    public function  __set($prop,$val){

        switch($prop){
            case 'nom_categorie':  $this->nom_categorie=$val ; break;
            case 'id_categorie':  $this->id_categorie=$val; break;
            default : return false; break;
            
            }
    }


// ajouter un categorie
    public function ajouter_categorie(){
        $doa=new DAO();
        $doa->sauvgarde_categorie($this);
        header("location: table_categorie.php?ajouter=succes");
        //  echo "Tfoo";//error 404 page !!
    }
    public static function  afficher_categorie(){
        $doa=new DAO();
        $categories=$doa->afficher_categorie();
        return $categories;
    }
// supprimer un categorie p
public static function supprimer_categorie($id){
    $doa=new DAO();
    $doa->delete_categorie($id);
    header("location: table_categorie.php?delete=succes");
}
//modification un categorie 

public static function modifier_categorie($id, $categorie){
    $doa=new DAO();
    $doa->update_categorie($id,$categorie);
    header("location: table_categorie.php?update=succes");
}

}
?>