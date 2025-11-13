<?php
$data = [
    "products" => ""
];

// Redirect is user is not connected
if(!isUserConneted()) {
    header("Location: " . APP_URL . "login");
    exit;
}

// Getting user's informations
$user = $_SESSION["user"];

// Loading carted products
require_once __DIR__ . "/../controls/cart.php";
// var_dump($data);