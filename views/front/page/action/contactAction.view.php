<?php
include ('assets/PHPMailer/PHPMailerAutoload.php');

$mailFrom = $_POST['mail'];
$nameFrom = $_POST['name'];
$subject = $_POST['subject'];
$content = $_POST['content'];

var_dump($_POST);

$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465; // or 587
$mail ->IsHTML(true);

// Authentification
$mail->Username = "esgi.aire@gmail.com";
$mail->Password = "3iw1Esgi%75013";

// Expéditeur
$mail->SetFrom($_POST['mail'], $_POST['name']);
// Destinataire
$mail->AddAddress(MAIN_ADMIN_ADRESS, MAIN_ADMIN_NOM);
// Objet
$mail->Subject = $subject;

// Votre message
$mail->MsgHTML('from'.$mailFrom.
    '<br>
    Name'.$nameFrom.
    '<br>
    Content :'.$content
);
?>

<div>
    <?php
    // Envoi du mail avec gestion des erreurs
    if(!$mail->Send()) {
        echo 'Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Message envoyé !';
    }
    ?>
</div>
