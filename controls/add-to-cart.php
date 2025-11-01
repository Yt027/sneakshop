<?php

if (!isset($_POST["id"]) || !isset($_POST["origin"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

if (!isset($_SESSION)) {
    session_start();
}

$cart = json_decode($_SESSION["cart"] ?? "[]", true);
$productId = intval($_POST["id"]);
$qty = intval($_POST["qty"]);
if ($_POST["origin"] === "shop") {
    if (isset($cart[$productId])) {
        unset($cart[$productId]);
        echo json_encode(["success" => true, "inCart" => false, "removed" => $productId]);
    } else {
        $cart[$productId] = ["qty" => 1];
        echo json_encode(["success" => true, "inCart" => true, "added" => $productId]);
    }
} else if($_POST["origin"] === "cart") {
    if(!$_POST["qty"] == 0) {
        $cart[$productId] = ["qty" => $qty];
        echo json_encode(["inCart" => [$productId, $qty]]);
    } else {
        unset($cart[$productId]);
        echo json_encode(["outCart" => $productId]);
    }
} else {
    echo json_encode(["error" => "Unknown action"]);
}
$_SESSION["cart"] = json_encode($cart);