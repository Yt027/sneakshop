<?php
require "configs/main.php";

// Request Manager
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

$routes = [
    '/' . APP_name . '/' => 'home',
    '/' . APP_name . '/home' => 'home',
    '/' . APP_name . '/index' => 'home',
    '/' . APP_name . '/shop' => 'shop',
    '/' . APP_name . '/boutique' => 'shop',
    '/' . APP_name . '/product' => 'product',
    '/' . APP_name . '/about' => 'about',
    '/' . APP_name . '/contact' => 'contact',
    '/' . APP_name . '/cart' => 'cart',
    '/' . APP_name . '/signin' => 'signin',
    '/' . APP_name . '/login' => 'login',
    '/' . APP_name . '/admin' => 'admin',
    '/' . APP_name . '/dashboard' => 'dashboard',
    '/' . APP_name . '/admin-add-product' => 'add-product',
];

if (array_key_exists($request, $routes)) {
    $page = $routes[$request];
    require "pages/$page.php";
} else {
    http_response_code(404);
    echo "404 - Page not found " . $request;
}
?>