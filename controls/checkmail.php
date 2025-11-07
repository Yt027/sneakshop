<?php
require_once __DIR__ . "/../models/users.php";
require_once __DIR__ . "/../models/temps.php";
$_SESSION = [];
var_dump($_SESSION);
if (isset($_POST["submit"])) {
    echo "hello";
    // Sanitizing inputs
    $first_name = htmlspecialchars(trim($_POST["firstName"]));
    $last_name = htmlspecialchars(trim($_POST["lastName"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $cart = json_encode([]);

    // Exit non-filled form
    // if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
    //     return false;
    // }

    $data = [
        "firstName" => $first_name,
        "lastName" => $last_name,
        "email" => $email,
        "password" => $password,
        "cart" => $cart
    ];
    
    if(!isset($_SESSION["auth_mail_sent"])) {
        // Create 6 characters code
        $code = "";
        for ($i=0; $i < 6; $i++) { 
            $code .= random_int(0, 9);
        }
        // Save code into temp table
        // var_dump($code);
        $tempData = [
            "email" => $email,
            "code" => $code,
            "data" => $data
        ];

        $tempData = json_encode($tempData);

        // Send code to email
        $_SESSION["auth_mail_sent"] = $tempData;
        sendMail($email, "Votre code", "<h3>Votre code de vérifcation Sneakshop est $code</h3>");
    }
    $url = APP_URL . "mailcheck";
    header("Location: $url");
}