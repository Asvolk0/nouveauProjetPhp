<?php

require_once 'connect.php';

$sql = "SELECT *
FROM `users` 
WHERE id = :idNb";

$stm = PDOConnect($sql, [
    'idNb'=> $_SESSION['user']['id']
]);

$user = $stm->fetch(PDO::FETCH_ASSOC);

?>