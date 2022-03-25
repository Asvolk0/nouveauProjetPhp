<?php

require_once 'connect.php';

if(isset($_POST['envoyer'])){
    ajouterProduit();
}

function ajouterProduit(){
    $sql = "INSERT INTO `produit_details`(`nom`, `prix`, `description`, `quantité`, `img`) 
    VALUES (:nom, :prix, :description, :quantite, :img)";

    $stm = PDOConnect($sql, [
        'nom'=> $_POST['nom'],
        'prix'=> (int) $_POST['prix'],
        'description'=> $_POST['description'],
        'quantite'=> (int) $_POST['quantité'],
        'img'=> $_POST['img']
    ]);

    header('Location: index.html');
    exit();
}

?>