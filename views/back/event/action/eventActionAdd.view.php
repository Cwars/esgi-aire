<?php
include ('assets/PHPMailer/PHPMailerAutoload.php');

if( !empty($_POST['title']) && !empty($_POST['description'])  && !empty($_POST['date'])) {
    $event = new Event();

    $title = htmlentities($_POST['title']);
    $description = htmlentities($_POST['description']);
    $date = $_POST['date'];

    $now = date("Y-m-d H:i:s");
    $author = $username;

    $error = false;
    $listOfErrors = [];

    if (strlen($title) < 2) {
        //Le title doit faire au moins 2 caractères
        $listOfErrors[] = "nbTitle";
        $error = true;
    }

    if ($event->populate(['title' => $title])){
        //Le title est déja utilisé
        $listOfErrors[] = "titleUsed";
        $error = true;
    }

    if (strlen($description) < 1) {
        //La description doit faire au moins 2 caractères
        $listOfErrors[] = "nbContent";
        $error = true;
    }

    //Envoie de mail

    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);

    $sub = new Subscribers();
    $user = new User();
    $res = $sub -> getAll("subscribers");

    // Authentification
    $mail->Username = "esgi.aire@gmail.com";
    $mail->Password = "3iw1Esgi%75013";

    // Expéditeur
    $mail->SetFrom("esgi.aire@gmail.com", "esgi-aire");
    // Destinataire

    foreach ( $res as $sub ){
        $user = $user->populate(['username' => $sub['usernameSub']]);
        $email = $user->getEmail();

        $mail->AddAddress($email, $sub["username"]);
    }

    // Objet
    $mail->Subject = "New event ". $title;
    // Votre message
    $mail->MsgHTML('Hello '.
        '<br>
                A new event just come out "'.$title.'" the => '.$date.
        '<br>
                Best Regards :'
    );

    // Envoi du mail avec gestion des erreurs
    if(!$mail->Send()) {
        echo 'Erreur : ' . $mail->ErrorInfo;
    } else {
        echo 'Message envoyé !';
    }

    if ($error === false) {
        $event->setTitle($title);
        $event->setDescription($description);
        $event ->setDate($date);
        $event ->setIsDeleted(0);
        $event ->setDateUpdated($now);
        $event ->setDateInserted($now);
        $event ->setAuthor($author);

        $event->save();
        $_SESSION['added'] = 1;
        header("Location: ".PATH_RELATIVE."back/event/menu/1");

    }else{
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
        $error = true;

    }
}else{
    $listOfErrors[] = "allRequired";
    $_SESSION["form_error"] = $listOfErrors;
    $_SESSION["form_post"] = $_POST;
    $error = true;
}
if($error==true)
{
    header("Location: ".PATH_RELATIVE."back/event/add");
}
