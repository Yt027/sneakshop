<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["auth_mail_sent"]) || !isset($_SESSION["auth_mail_sent"]["data"]) || !isset($_SESSION["auth_mail_sent"]["code"])) {
    header("Location: " . APP_URL . "signin");
    exit();
}


if (isset($_POST["submit"])) {
    $passkey = htmlspecialchars(trim($_POST["keypass"]));
    
    $data = $_SESSION["auth_mail_sent"];
    $data = json_decode($data, true);
    unset($_SESSION["auth_mail_sent"]);
    
    if (!$passkey === $data["code"]) {
        header("Location: " . APP_URL . "signin");
        exit;
    } else {
        $signin = $data["data"];
        $_POST["firstName"] = $signin["firstName"];
        $_POST["lastName"] = $signin["lastName"];
        $_POST["email"] = $signin["email"];
        $_POST["password"] = $signin["password"];
        $_POST["cart"] = $signin["cart"];
        
        require_once __DIR__ . "/./signin.php";
    }
}
