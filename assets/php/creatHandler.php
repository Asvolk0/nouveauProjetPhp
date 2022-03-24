<?php

require_once 'connect.php';

if(isset($_POST['envoyer'])){
    setUser();
}








function setUser(){
    $inscription = "INSERT INTO `users`(`prenom`, `nom`, `mail`, `motDePasse`) 
    VALUES (:prenom, :nom, :mail, :motDePasse)";

    $stm = PDOConnect($inscription, [
        'prenom'=> $_POST['prenom'],
        'nom'=> $_POST['nom'],
        'mail'=> $_POST['courriel'],
        'motDePasse'=> password_hash($_POST['motDePasse'], PASSWORD_BCRYPT)
    ]);

    header('Location: seConnecter.html');
    exit();
}