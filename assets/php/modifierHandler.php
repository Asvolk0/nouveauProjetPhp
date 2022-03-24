<?php

require_once 'connect.php';

$connect = "SELECT *
    FROM `users` 
    WHERE id = :idNb";

$stm = PDOConnect($connect, [
    'idNb'=> $_SESSION['user']['id']
]);

$contact = $stm->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['envoyer'])){
    modifiedUser();
}


function modifiedUser(){
    $sql = "UPDATE `users` 
    SET `prenom`=:change_prenom,`nom`=:change_nom
    WHERE id=:id";

    $stm = PDOConnect($sql, [
        'change_prenom'=> $_POST['prenom'],
        'change_nom'=> $_POST['nom'],
        'id'=> $_SESSION['user']['id']
    ]);

    header('Location: test.html');
    exit();
}

?>