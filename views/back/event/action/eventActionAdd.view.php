<?php
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
