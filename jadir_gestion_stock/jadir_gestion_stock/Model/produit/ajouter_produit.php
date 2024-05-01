<?php

extract($_POST);
if (isset($sauvgrader)){
    include ("../../Class/class_produit.php");

      $photo=$_FILES['photo'];
      // echo $photo['name']."<br>".$photo['tmp_name'];
      $filename=$photo['tmp_name'];
      $extension= pathinfo($photo['name'], PATHINFO_EXTENSION);
      $destination="../../image/.$libelle.$extension";
      move_uploaded_file($filename,$destination);

    $prod=new produit(null,$libelle,$prix_unitaire,$quantiti,$prix_achat,$prix_vent,$destination,$description,null,$id_categorie);
    $prod->ajouter_produit();
    
}

// echo $libelle;echo "$";


// echo $prix_achat;echo "$";
// echo $prix_vent;echo "$";
// echo $prix_unitaire;echo "$";
// echo $quantiti;echo "$";
// echo $img;echo "$";
// echo $description;echo "$";
// echo $id_categorie;echo "$";



?>