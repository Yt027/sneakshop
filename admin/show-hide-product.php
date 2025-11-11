<?php
require_once __DIR__ . "/../models/products.php";

if (!isset($_POST["id"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

$productId = intval($_POST["id"]);
$productModel = new Products();
$state = $productModel->toggleVisibility($productId);
$response = [];

if($state === false) {
    $response["error"] = "Non valid request";
} else {
    $response["state"] = $state;
}

echo json_encode($response);