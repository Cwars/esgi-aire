<?php
if( !empty($_POST['title']) && !empty($_POST['description'])  && !empty($_POST['date'])) {
    $event = new Event();

    //Si nouveau input
    $title = htmlentities($_POST['title']);
    $description = htmlentities($_POST['description']);
    $date = $_POST['date'];

    $now = date("Y-m-d H:i:s");
    $author = $_SESSION['username'];

    $error = false;
    $listOfErrors = [];

    if (strlen($title) < 2) {
        //Le titre doit faire au moins 2 caractères
        $listOfErrors[] = "nbTitle";
        $error = true;
    }

    if ($titleUpdate != $title && $event->populate(['title' => $title])){
        //Le titre est déja utilisé
        $listOfErrors[] = "titleUsed";
        $error = true;
    }

    if (strlen($description) < 1) {
        //Le description doit faire au moins 2 caractères
        $listOfErrors[] = "nbContent";
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