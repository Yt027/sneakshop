<?php
if(!isset($_SESSION)) {
    session_start();
}

$cart = json_decode($_SESSION["cart"]) ?? [];
var_dump($cart);