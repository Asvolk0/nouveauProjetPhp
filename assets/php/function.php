<?php

require_once 'connect.php';

function isLogged(){
    if(isset($_SESSION['user'])){
        return true;
    }else{
        return false;
    }
}

function isAdmin(){
    if(isLogged()){
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
            return true;
        }
    }else{
        return false;
    }
}