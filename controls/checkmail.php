<?php
require_once __DIR__ . "/../models/users.php";
if(!isset($_SESSION)) {
    session_start();
}
// $_SESSION = [];
var_dump($_SESSION);

if (isset($_POST["submit"])) {
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

        // Save code into temp       
        $tempData = [
            "expiration" => time() + (5 * 60), // 5 minutes expiration code
            "code" => $code,
            "data" => $data
        ];

        $tempData = json_encode($tempData);

        // Send code to email
        $msg = "Votre code de vérifcation Sneakshop est $code";
        if(sendMail($email, "Votre code", "<h3>$msg</h3>", $msg) == true){
            $_SESSION["auth_mail_sent"] = $tempData;
        } else {
            echo "Une erreur est survenue, veuillez réessayer";
        }
    }
    $url = APP_URL . "mailcheck";
    header("Location: $url");
}