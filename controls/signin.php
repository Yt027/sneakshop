<?php
require_once __DIR__ . "/../models/users.php";

if (isset($_POST["submit"])) {
    // Sanitizing inputs
    $first_name = htmlspecialchars(trim($_POST["firstName"]));
    $last_name = htmlspecialchars(trim($_POST["lastName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Exit non-filled form
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        return false;
    }

    $userModel = new Users();
    $user = $userModel->addUser($first_name, $last_name, $email, $password);
    var_dump($user);
}
