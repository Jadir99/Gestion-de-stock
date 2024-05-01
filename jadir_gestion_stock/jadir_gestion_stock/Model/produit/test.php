<?php
require_once ("../../Class/class_produit.php");
$produits=Produit::afficher_produit(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn JavaScript</title>
    <link rel="stylesheet" href="main.css" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      .container {
        width: 500px;
        margin: 20px auto;
      }
      .form {
        background-color: #eee;
        border-radius: 6px;
        padding: 20px;
        display: flex;
        align-items: center;
      }
      .input {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        flex: 1;
      }
      .input:focus {
        outline: none;
      }
      .add {
        border: none;
        background-color: #f44336;
        color: white;
        padding: 10px;
        border-radius: 6px;
        margin-left: 10px;
        cursor: pointer;
      }
      .tasks {
        background-color: #eee;
        margin-top: 20px;
        border-radius: 6px;
        padding: 20px;
      }
      .tasks .task {
        background-color: white;
        padding: 10px;
        border-radius: 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.3s;
        cursor: pointer;
        border: 1px solid #ccc;
      }
      .tasks .task:not(:last-child) {
        margin-bottom: 15px;
      }
      .tasks .task:hover {
        background-color: #f7f7f7;
      }
      .tasks .task.done {
        opacity: 0.5;
      }
      .tasks .task span {
        font-weight: bold;
        font-size: 10px;
        background-color: red;
        color: white;
        padding: 2px 6px;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="form">
        
<?php
// var_dump($produits);
foreach(  $produits as $row){?>

  <input type="hidden" class="input" value="<?=$row->__get("libelle")?>"/>
  <input type="submit" class="add" value="Add Task" />

<?php }?>

      </div>
      <div class="tasks"></div>
    </div>
    <script src="test.js"></script>
  </body>
</html>