<?php
if (!isset($_SESSION)) {
    session_start();
}

// Return to signin when auth_mail_sent don't exist
if (!isset($_SESSION["auth_mail_sent"])) {
    header("Location: " . APP_URL . "signin");
    exit();
}


if (isset($_POST["submit"])) {
    // Extract user passed keypass
    $passkey = htmlspecialchars(trim($_POST["keypass"]));
    
    // Extract + delete auth_mail_sent
    $data = $_SESSION["auth_mail_sent"];
    $data = json_decode($data, true);
    unset($_SESSION["auth_mail_sent"]);
    
    if (!$passkey === $data["code"] || time() > $data["expiration"]) {
        // Exit if user gave a wrong or expired keypass
        header("Location: " . APP_URL . "signin");
        exit;
    } else {
        // Get user's IDs
        $signin = $data["data"];
        $_POST["firstName"] = $signin["firstName"];
        $_POST["lastName"] = $signin["lastName"];
        $_POST["email"] = $signin["email"];
        $_POST["password"] = $signin["password"];
        $_POST["cart"] = $signin["cart"];
        
        require_once __DIR__ . "/./add-user.php";
    }
}
