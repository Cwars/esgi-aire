<?php

require("Location: http://localhost:8888/".PATH_RELATIVE."assets/PHPMailer/PHPMailerAutoload.php");



$mailFrom = $_POST['mail'];
$nameFrom = $_POST['name'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$mail = new PHPMailer();
$mail->Host = 'esgi.aire@gmail.com';
$mail->SMTPAuth   = true;
$mail->Port = 587; // Par défaut

// Authentification
$mail->Username = "esgi.aire@gmail.com";
$mail->Password = "3iw1Esgi%75013";

// Expéditeur
$mail->SetFrom($_POST['mail'], $_POST['name']);
// Destinataire
$mail->AddAddress(MAIN_ADMIN_ADRESS, 'Nom Prénom');
// Objet
$mail->Subject = $subject;

// Votre message
$mail->MsgHTML('from'.$mailFrom.
    '<br>
    Name'.$nameFrom.
    '<br>
    Content :'.$content
);

// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé !';
}