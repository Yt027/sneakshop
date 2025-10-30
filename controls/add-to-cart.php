<?php

if (!isset($_POST["id"]) || !isset($_POST["origin"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

if (!isset($_SESSION)) {
    session_start();
}

$cart = json_decode($_SESSION["cart"] ?? "[]", true);
if ($_POST["origin"] === "shop") {
    $productId = intval($_POST["id"]);
    if (isset($cart[$productId])) {
        unset($cart[$productId]);
        echo json_encode(["success" => true, "inCart" => false, "removed" => $productId]);
    } else {
        $cart[$productId] = ["qty" => 1];
        echo json_encode(["success" => true, "inCart" => true, "added" => $productId]);
    }
    $_SESSION["cart"] = json_encode($cart);
} else {
    echo json_encode(["error" => "Unknown action"]);
}