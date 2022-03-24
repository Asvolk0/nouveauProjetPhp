<?php

require_once 'connect.php';

if(isset($_POST['envoyer'])){
    connectUser();
}


function connectUser(){
    $connect = "SELECT *
    FROM `users` 
    WHERE mail = :mail_verification";

    $stm = PDOConnect($connect, [
        'mail_verification'=> $_POST['courriel']
    ]);

    $utilisateur = $stm->fetch(PDO::FETCH_ASSOC);

    if($utilisateur != false){
        $enVerification = password_verify($_POST['motDePasse'], $utilisateur['motDePasse']);

        if($enVerification == true){

            $_SESSION['user']['id'] = $utilisateur['id'];
            $_SESSION['user']['nom'] = $utilisateur['nom'];
            $_SESSION['user']['prenom'] = $utilisateur['prenom'];
            $_SESSION['user']['mail'] = $utilisateur['mail'];
            $_SESSION['user']['motDePasse'] = $utilisateur['motDePasse'];

            header('Location: test.html?prenomUtilisateur='.$_SESSION['user']['prenom']);
            exit();
        }
    }
}
?>