<?php
require "configs/main.php";

// Request Manager
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

// Remove trailing slash if not the root path
if (strlen($request) > 1 && substr($request, -1) === '/') {
    $request = rtrim($request, '/');
}

// If the request is the base path without a trailing slash, redirect to the one with a slash
// to have a canonical URL for the home page.
if ($request === '/' . APP_name) {
    $request = '/' . APP_name . '/';
}

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
    '/' . APP_name . '/dunyacallback' => 'dunya-callback',
    '/' . APP_name . '/pay' => 'dunya-pay',
    '/' . APP_name . '/signin' => 'signin',
    '/' . APP_name . '/login' => 'login',
    '/' . APP_name . '/mailcheck' => 'check-email',
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