<?php
require_once __DIR__ . "/../models/cart.php";

if (!isset($_POST["id"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

if (!isset($_SESSION)) {
    session_start();
}

$productId = intval($_POST["id"]);
$qty = isset($_POST["qty"]) ? intval($_POST["qty"]) : 1;

$isUser = isset($_SESSION["user"]) && isset($_SESSION["user"]["email"]);
if ($isUser) {
    $cartModel = new Cart($_SESSION["user"]["email"]);
    $cart = $cartModel->cart;
    if (!is_array($cart)) $cart = [];
} else {
    $cart = json_decode($_SESSION["cart"] ?? "{}", true);
    if (!is_array($cart)) $cart = [];
}

// Action: add/remove/update
$origin = $_POST["origin"] ?? "shop";
if ($origin === "shop") {
    if (isset($cart[$productId])) {
        unset($cart[$productId]);
        $inCart = false;
        $response = ["success" => true, "inCart" => false, "removed" => $productId];
    } else {
        $cart[$productId] = 1;
        $inCart = true;
        $response = ["success" => true, "inCart" => true, "added" => $productId];
    }
} else if ($origin === "cart" || $origin === "product") {
    if ($qty > 0) {
        $cart[$productId] = $qty;
        $inCart = true;
        $response = ["inCart" => [$productId, $qty]];
    } else {
        unset($cart[$productId]);
        $inCart = false;
        $response = ["outCart" => $productId];
    }
} else {
    $response = ["error" => "Unknown action"];
}

// Notice wether cart is empty or not
$response["cartEmpty"] = empty($cart) ? true : false;

// Sauvegarde
if ($isUser) {
    $cartModel->setCart($cart);
} else {
    $_SESSION["cart"] = json_encode($cart);
}

echo json_encode($response);