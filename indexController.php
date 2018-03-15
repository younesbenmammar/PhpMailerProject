<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception ;
use PHPMailer\PHPMailer\SMTP;
include 'vendor/autoload.php';




$receveur = $_POST["receveur"];
$message = $_POST["message"];
$emetteur = $_POST["emetteur"];
$mdpemetteur = $_POST["mdp"];

$mail = new PHPMailer(true); // instancie un new objet phpmailer

try {
    
    //$mail->SMTPDebug = 2 ;
    $mail->isSMTP(); // pour dire que l'email va être envoyer via SMTP
    
    $mail->Host = 'smtp.gmail.com';   // l'hote auquel il faut se connecter
    $mail->SMTPAuth  =  true ;  // Le serveur exige une authentificaton 
    $mail->Username = $emetteur; // adresse mail de celui qui envoi 
    $mail->Password = $mdpemetteur; // mdp de celui qui envoi 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($receveur); // adresse de celui qu recoit
    $mail->addAddress($receveur);     // Ajoute une autre adresse
    
      // Add attachments
    
    
    $mail->isHTML(true);                                  // Format Html
    $mail->Subject = " Test pour l'exposé "; // Sujet du mail 
    $mail->Body    = $message; // message du mail (corps)
    $mail->send();
    echo 'Message Envoyé';
    
}
catch (Exception $e) {
    echo 'Message non envoyé ' , $mail->ErrorInfo;
}
require 'indexView.php';

?>