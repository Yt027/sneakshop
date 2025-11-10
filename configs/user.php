<?php
if(!isset($_SESSION)) {
    session_start();
}

function userConnect($user) {
    $_SESSION["user"] = $user;
}

function isUserConneted(){
    if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
        return true;
    }
    return false;
}