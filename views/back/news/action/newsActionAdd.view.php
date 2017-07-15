<?php
if( !empty($_POST['title']) && !empty($_POST['content'])) {
    $news = new News();
    $title = trim($_POST['title']);
    $author = $username;
    $content = trim($_POST['content']);
    $type = trim($_POST['type']);

    $error = false;
    $listOfErrors = [];

    if (strlen($title) < 2) {
        //Le titre doit faire au moins 2 caractères
        $listOfErrors[] = "nbTitle";
        $error = true;
    }

    if ($news->populate(['title' => $title])){
        //Le titre est déja utilisé
        $listOfErrors[] = "titleUsed";
        $error = true;
    }

    if (strlen($content) == 1) {
        //Le contenu doit faire au moins 2 caractères
        $listOfErrors[] = "nbContent";
        $error = true;
    }

    if ($error === false) {
        $news->setTitle($title);
        $news->setAuthor($author);
        $news->setContent($content);
        $news->setType($type);
        $news->setIsDeleted(0);

        $news->save();
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