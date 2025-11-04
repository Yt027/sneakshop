<?php
if(!isset($_SESSION)) {
    session_start();
}

function userConnect($user) {
    $_SESSION["user"] = $user;
}