<?php
require_once __DIR__ . "/../models/users.php";

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
    var_dump($user);
}
