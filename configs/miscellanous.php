<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/../vendor/autoload.php";


function sendMail($to, $head, $body) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP Gmail
        $mail->isSMTP();
        $mail->Host       = $_ENV["MAIL_HOST"];
        $mail->SMTPAuth   = true;
        $mail->Username   = "contact@yayadev.net"; // ton adresse Gmail
        $mail->Password   = $_ENV["MAIL_KEY"]; // mot de passe d’application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Expéditeur & destinataire
        $mail->setFrom("contact@yayadev.net", 'Yaya');
        $mail->addAddress($to, 'Destinataire');

        // Contenu du message
        $mail->isHTML(true);
        $mail->Subject = $head;
        $mail->Body    = $body ?? "<h3>Ceci est un test réussi via PHPMailer & Gmail !</h3>";
        $mail->AltBody = 'Ceci est un test réussi via PHPMailer & Gmail !';

        $mail->send();
        echo '✅ Mail envoyé avec succès.';
    } catch (Exception $e) {
        echo "❌ Erreur : {$mail->ErrorInfo}";
    }
}