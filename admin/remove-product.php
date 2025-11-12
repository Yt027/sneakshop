<?php
require_once __DIR__ . "/../models/products.php";

if (!isset($_POST["id"])) {
    echo json_encode(["error" => "Invalid request"]);
    exit;
}

$productId = intval($_POST["id"]);
$productModel = new Products();

// Delete product images directory
deleteDir(__DIR__ . "/../uploads/products/p-$productId");
$state = $productModel->deleteProduct($productId);
$response = [];

if($state === false) {
    $response["error"] = "Non valid request";
} else {
    $response["state"] = $state;
}

function deleteDir($dir) {
    if (!is_dir($dir)) return;

    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $path = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_dir($path)) {
                deleteDir($path); // recursive call
            } else {
                unlink($path); // remove file
            }
        }
    }

    rmdir($dir); // Remove the empty directory
}


echo json_encode($response);