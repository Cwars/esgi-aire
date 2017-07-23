<?php
if( !empty($_POST['title']) && !empty($_POST['description'])  && !empty($_POST['date'])) {
    $event = new Event();

    //Si nouveau input
    $title = htmlentities($_POST['title']);
    $description = htmlentities($_POST['description']);
    $date = $_POST['date'];

    $now = date("Y-m-d H:i:s");
    $author = $username;

    $error = false;
    $listOfErrors = [];

    //Le nom d'utilisateur est déjà utilisé
    if (strlen($title) < 2) {
        //Le nom d'utilisateur doit faire au moins 2 caractères
        $listOfErrors[] = "nbUsername";
        $error = true;
    }

    if ($titleUpdate != $title && $event->populate(['title' => $title])){
        //Le nom d'utilisateur est déja utilisé
        $listOfErrors[] = "usernameUsed";
        $error = true;
    }

    //Vérifier le nom
    if (strlen($description) < 1) {
        //Le nom doit faire au moins 2 caractères
        $listOfErrors[] = "nbLastname";
        $error = true;
    }

    if ($error === false) {
        $event->setId($idUpdate);
        $event->setTitle($title);
        $event->setDescription($description);
        $event ->setDate($date);
        $event ->setIsDeleted(0);
        $event ->setDateUpdated($now);
        $event ->setDateInserted($dateI);
        $event ->setAuthor($author);

        $event->save();
    }else{
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
    }
}else{
    $listOfErrors[] = "7";
    $_SESSION["form_error"] = $listOfErrors;
    $_SESSION["form_post"] = $_POST;
}

echo "<div class=\"content-wrapper\">";
if( isset($_SESSION["form_error"]) ){
    foreach ($_SESSION["form_error"] as $error) {
        echo "<li>".$msgError[$error];
    }
}
unset($_SESSION["form_post"]);
unset($_SESSION["form_error"]);
echo "</div>";