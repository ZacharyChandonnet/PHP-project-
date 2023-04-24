<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\phpmailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "";
$mail->Password = base64_decode("");
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->setFrom($email, $name);
//$mail->addCustomHeader('Reply-To', 'heyzaliday@gmail.com');
$mail->addAddress("sagsag9900@yopmail.com", "Zachary");

$mail->Subject = $subject;
$mail->Body = $message;


try {
    $mail->send();
    header("Location: index.php?email_sent=1");
} catch (Exception $e) {
    echo '<script>alert("Une erreur s\'est produite lors de l\'envoi de votre email");</script>';
}
