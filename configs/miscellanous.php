<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Send email from any page
function sendMail($to, $head, $body, $bodyAlt) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = $_ENV["MAIL_HOST"];
        $mail->SMTPAuth   = true;
        $mail->Username   = "contact@yayadev.net";
        $mail->Password   = $_ENV["MAIL_KEY"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Expeditor & receiver
        $mail->setFrom("contact@yayadev.net", 'Sneakshop');
        $mail->addAddress($to, 'Destinataire');

        // Content of the message
        $mail->isHTML(true);
        $mail->Subject = $head;
        $mail->Body    = $body ?? "<h3>Ceci est un test réussi via PHPMailer & Gmail !</h3>";
        $mail->AltBody = $bodyAlt ?? 'Ceci est un test réussi via PHPMailer & Gmail !';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return $e;
    }
}

// Get cart anywhere
function loadCart() {
    $cartModel = Null;
    $cart = Null;
    if(isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])) {
        $cartModel = new Cart($_SESSION["user"]["email"]);
        $cart = $cartModel->cart;
    } else {
        $cart = json_decode($_SESSION["cart"] ?? '[]', true);
    }
    return $cart;
}

// Give page access only to users with admin privileges
function adminOnly() {
    if(!isset($_SESSION)) {
        session_start();
    }

    $email = isset($_SESSION["user"]["email"]) ? $_SESSION["user"]["email"] : "";
    $userModel = new Users();

    if(!$userModel->isAdmin($email)) {
        header("Location: " . APP_URL);
    }
}