<?php
if (isset($_POST["submit"])) {
    // Sanitizing inputs
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Exit non-filled form
    if (empty($email) || empty($password)) {
        return false;
    }

    $userModel = new Users();
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
