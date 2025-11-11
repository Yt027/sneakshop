<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../models/cart.php";


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
function loadCart(){
    $cartModel = Null;
    $cart;
    if(isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])) {
        $cartModel = new Cart($_SESSION["user"]["email"]);
        $cart = $cartModel->cart;
    } else {
        $cart = json_decode($_SESSION["cart"] ?? '[]', true);
    }
    return $cart;
}