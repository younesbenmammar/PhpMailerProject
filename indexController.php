<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception ;
use PHPMailer\PHPMailer\SMTP;
include 'vendor/autoload.php';




$receveur = $_POST["receveur"];
$message = $_POST["message"];


$mail = new PHPMailer(true); // instancie un new objet phpmailer

try {
    
    //$mail->SMTPDebug = 2 ;
    $mail->isSMTP();
    
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth  =  true ;
    $mail->Username = 'younescomptepro@gmail.com';
    $mail->Password = 'algeriendu34';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($receveur);
    $mail->addAddress($receveur);     // Add a recipient
    
      // Add attachments
    
    
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Planning de la Semaine';
    $mail->Body    = $message;
    $mail->AltBody = 'Bienvenue a tous';
    $mail->send();
    echo 'Message Envoyé';
    
}
catch (Exception $e) {
    echo 'Message non envoyé ' , $mail->ErrorInfo;
}
require 'indexView.php';

?>