<?php

require_once 'connect.php';
require_once 'selectHandler.php';

function takeId(){
    $sql = "SELECT *
    FROM `users`";
    
    $stm = PDOConnect($sql);
    
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

$product = takeId();
foreach($product as $value){
   if(isset($_POST['envoyer'])){
        modifiedAdmin($value);
    } 
}

function modifiedAdmin($value){

    $sqlUpdate = "UPDATE users 
    SET 'admin' = :admin
    WHERE id=:id";

    $statement = PDOConnect($sqlUpdate, [
        'admin' => $_POST['admin'],
        'id'=> $value['id']
    ]);

    header('Location: test.html');
    exit();
}
?>