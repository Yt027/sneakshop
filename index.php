<?php
// Request Manager
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

$routes = [
    '/' => 'home',
    '/home' => 'home',
    '/index' => 'home',
    '/shop' => 'shop',
    '/boutique' => 'shop',
    '/product' => 'product',
    '/about' => 'about',
    '/contact' => 'contact',
    '/cart' => 'cart',
    '/signin' => 'signin',
    '/login' => 'login',
    '/admin' => 'admin',
    '/dashboard' => 'dashboard',
    '/admin-add-product' => 'add-product',
];

if (array_key_exists($request, $routes)) {
    $page = $routes[$request];
    require "pages/$page.php";
} else {
    http_response_code(404);
    echo "404 - Page not found";
}
?>