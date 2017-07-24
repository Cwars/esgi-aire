<!--<div class="top-image">-->
<!--    <!--<img src="images/header.png" width="100%" alt="header">-->
<!--    <h1 class="slide-label">Nous contacter</h1>-->
<!--</div>-->
<!---->
<!--<section class="un" id="Event">-->
<!--    <div class="container">-->
<!--        <h2 class="text-center">Formulaire de contact</h2>-->
<!--        <div class="col1 firstcol">-->
<!--            <p class="text-center">-->
<!--                L'artiste que vous êtes, souhaitez vous vous faire connaître davantage ? <br>-->
<!--                Veuillez remplir le formulaire pour avoir plus informations. Nous sommes à votre écoute.</p>-->
<!---->
<!--            <form id="contact_form" class="text-center" action="#" method="POST" enctype="multipart/form-data">-->
<!--                <div class="">-->
<!--                    <label for="name">Votre nom:</label><br />-->
<!--                    <input id="name" class="input" name="name" type="text" value="" size="70" /><br />-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <label for="email">Votre email:</label><br />-->
<!--                    <input id="email" class="input" name="email" type="text" value="" size="70" /><br />-->
<!--                </div>-->
<!--                <div class="">-->
<!--                    <label for="message">Votre message:</label><br />-->
<!--                    <textarea id="message" class="input" name="message" rows="7" cols="100"></textarea><br />-->
<!--                </div>-->
<!--                <input id="envoyer" type="submit" value="Envoyer" />-->
<!--            </form>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</section>-->

<?php

require("Location: ".PATH_RELATIVE."assets/phpmailer/class.phpmailer.php");

$mail = new PHPMailer();
$mail->Host = 'esgi.aire@gmail.com';
$mail->SMTPAuth   = true;
$mail->Port = 587; // Par défaut

// Authentification
$mail->Username = "esgi.aire@gmail.com";
$mail->Password = "3iw1Esgi%75013";

// Expéditeur
$mail->SetFrom('esgi.aire@gmail.com', 'Nom Prénom');
// Destinataire
$mail->AddAddress('khuon.rithdavid@gmail.com', 'Nom Prénom');
// Objet
$mail->Subject = 'Objet du message';

// Votre message
$mail->MsgHTML('Contenu du message en HTML');

// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
    echo 'Erreur : ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé !';
}