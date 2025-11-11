<?php
if(!isset($_SESSION)) {
    session_start();
}

if (!isset($_GET['target'])) {
    // Redirect to home if no product ID is provided
    header("Location: " . APP_URL . "shop");
    exit();
}

$productsModel = new Products();
$productId = intval($_GET['target']);
$product = $productsModel->getProductById($productId);


if (!$product) {
    // Redirect to home if product ID is invalid
    header("Location: " . APP_URL . "shop");
    exit();
}

// Loading carted quantity of current product
if(!isset($_SESSION)) {
    session_start();
}

$cartModel = Null;
$cart;
if(isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])) {
    $cartModel = new Cart($_SESSION["user"]["email"]);
    echo "hello";
    $cart = $cartModel->cart;
} else {
    $cart = json_decode($_SESSION["cart"] ?? '[]', true);
}

$cartQty = isset($cart[$productId]) ? $cart[$productId] : 1;

// Setting page title
define("TITLE", "SneakShop - " . $product["name"]);


// Loadings product images
$directory = __DIR__ . "/../uploads/products/p-$productId";
$files = array_diff(scandir($directory), array('..', '.'));
$images = array_filter($files, function($file) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
});
$productImages = [];
foreach ($images as $img) {
    $productImages[] = APP_URL . "uploads/products/p-$productId/$img";
}

// Parsing caracteristics
$caracteristics = json_decode($product['caracteristics'], true);