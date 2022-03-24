<?php
require_once 'connect.php';

function getProduct() :array {



    $sql = "SELECT * FROM produit_details";
            
    
    $stm = PDOConnect($sql);


    return 
    $stm->fetchAll(PDO::FETCH_ASSOC);
}
$product = getProduct();