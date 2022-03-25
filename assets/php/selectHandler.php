<?php

require_once 'connect.php';

function selectSession(){
    $sql = "SELECT *
    FROM `users` 
    WHERE id = :idNb";

    $stm = PDOConnect($sql, [
        'idNb'=> $_SESSION['user']['id']
    ]);

    return $stm->fetch(PDO::FETCH_ASSOC);
}

function select(){
    $sql = "SELECT * 
    FROM `users`";

    $stm = PDOConnect($sql);

    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

$user = selectSession();
$selectTablUser = select();

?>