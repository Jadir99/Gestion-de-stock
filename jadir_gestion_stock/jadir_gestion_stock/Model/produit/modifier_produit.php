<?php 
require ("../../Class/class_produit.php");

// session //
extract($_POST);
extract($_GET);

if (isset($sauvgrader)){



    // echo $referance."   ";
    // echo $libelle." ";
    // echo $quantiti."    ";
    // echo $prix_achat." ";

    $img=$_FILES['img'];
    echo $img['name']."<br>".$img['tmp_name'];
    $filename=$img['tmp_name'];
    $extension= pathinfo($img['name'], PATHINFO_EXTENSION);
    $destination="../../image/.$libelle.$extension";
    move_uploaded_file($filename,$destination);

    $prod=new produit(null,$libelle,$prix_unitaire,$quantiti,$prix_achat,$prix_vent,$destination,$description,null,$id_categorie);
    $prod->modifier_produit($referance,$prod);
}else {

}

?>