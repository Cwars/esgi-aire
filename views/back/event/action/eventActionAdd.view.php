<?php
if( !empty($_POST['title']) && !empty($_POST['description'])  && !empty($_POST['lastname'])) {
    $event = new Event();
    $title = htmlentities($_POST['title']);
    $description = htmlentities($_POST['firstname']);
//    $ = htmlentities($_POST['']);
//    $ = htmlentities($_POST['']);

    $error = false;
    $listOfErrors = [];

    //Le nom d'utilisateur est déjà utilisé
    if (strlen(title) == 1) {
        //Le nom d'utilisateur doit faire au moins 2 caractères
        $listOfErrors[] = "nbUsername";
        $error = true;
    }

    if ($event->populate(['title' => $title])){
        //Le nom d'utilisateur est déja utilisé
        $listOfErrors[] = "usernameUsed";
        $error = true;
    }

    //Vérifier le nom
    if (strlen($description) == 1) {
        //Le nom doit faire au moins 2 caractères
        $listOfErrors[] = "nbLastname";
        $error = true;
    }

//    //Vérifier le prénom
//    if (strlen($firstname) == 1) {
//        //Le prénom doit faire au moins 2 caractères
//        $listOfErrors[] = "nbFirstname";
//        $error = true;
//    }
//
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        // Email incorrect
//        $listOfErrors[] = "errorEmail";
//        $error = true;
//    }


    if ($error === false) {
        $event->setTitle($title);
        $event->setDescription($description);
//        $event->setLastname($lastname);

        $event->setIsDeleted(0);

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