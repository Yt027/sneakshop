<?php
if (isset($_POST["submit"])) {
    // Sanitizing inputs
    $first_name = htmlspecialchars(trim($_POST["firstName"]));
    $last_name = htmlspecialchars(trim($_POST["lastName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $cart = json_encode([]);

    // Exit non-filled form
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        return false;
    }

    $userModel = new Users();
    $userId = $userModel->addUser($first_name, $last_name, $email, $password, $cart);
    $user = $userModel->checkUser($email, $password);
    
    if($user) {
        // Starting user session
        userConnect($user);
        // Transfer session cart to database cart
        if(isset($_SESSION["cart"]) && !empty(json_decode($_SESSION["cart"]))) {
            $cart = new Cart($email);
            $cart->setCart($_SESSION["cart"]);
            unset($_SESSION["cart"]);
        }

        header("Location: " . APP_URL);
    }
}
