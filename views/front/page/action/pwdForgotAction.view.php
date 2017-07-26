<?php
include ('assets/PHPMailer/PHPMailerAutoload.php');

$user = new User();

$mailPwd = htmlentities(trim($_POST['email']));
$now = date("Y-m-d H:i:s");

$user = $user->populate(['email' => $mailPwd]);

if($user->populate(['email' => $mailPwd])){

$user = $user->populate(['email' => $mailPwd]);

$newId = $user->getId();
$newFirstname = $user->getFirstname();
$newUsername = $user->getUsername();
$newLastname = $user->getLastname();
$newEmail = $user->getEmail();
$newStatus = $user->getStatus();
$dateI = $user->getDateInserted();
$newPwd = uniqid();

//Nouveau profil avec nouveau mdp uniquement

$user->setId($newId);
$user->setUsername($newUsername);
$user->setStatus($newStatus);
$user->setFirstname($newFirstname);
$user->setLastname($newLastname);
$user->setEmail($mailPwd);
$user->setPwdUpdate($newPwd);
$user->setDateInserted($dateI);
$user->setDateUpdated($now);
$user->setIsDeleted(0);

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
$mail->SetFrom("esgi.aire@gmail.com", "ESGI-AIRE");
// Destinataire
$mail->AddAddress($newEmail, $newUsername);
// Objet
$mail->Subject = "Mot de passe oublié";

// Votre message
$mail->MsgHTML('This is your new Password: ' .$newPwd. 'please ask us if you want to change it, Best Regards.');
?>
<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Envoie d'un nouveau mot de passe</h1>
</div>
<section class="un" id="Login">
    <div class="container">
        <div class="col1 firstcol">
            <h2 class="text-center">
                <?php
                // Envoi du mail avec gestion des erreurs
                if(!$mail->Send()) {
                    echo 'Erreur : ' . $mail->ErrorInfo;
                } else {
                    echo 'Message envoyé !';
                }
                ?>
            </h2>
        </div>
    </div>
</section>

<?php }else{
?>
<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Connexion</h1>
</div>
<section class="un" id="Login">
    <div class="container">
        <div class="col1 firstcol">
            <h2 class="text-center">
                <?php
                echo 'Mail non connu';
                }
                ?>
            </h2>
        </div>
    </div>
</section>
