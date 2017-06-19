<?php
//$param = new Param();
//$param->setAuthor($_POST['author']);
//$param->setContent($_POST['content']);
//
//var_dump($param);
//
//$param->save();

if( !empty($_POST['title']) && !empty($_POST['author'])  && !empty($_POST['content'])){
    $news = new News();
    $news = trim($_POST['title']);
    $news = trim($_POST['author']);
    $news = trim($_POST['content']);

    $error = false;
    $listOfErrors = [];

    if ((strlen($title)<55)) {
        //Le nom d'utilisateur doit faire au moins 55 caractères
    $listOfErrors[] = "8";
    $error = true;
}
    if (strlen($author) == 1) {
        //Le nom doit faire au moins 2 caractères
        $listOfErrors[] = "2";
        $error = true;
    }
    if (strlen($content) > 25) {
        //Le
        $listOfErrors[] = "3";
        $error = true;
    }

    if ($error === false) {
        $news->setAuthor($author);
        $news->setTitle($title);
        $news->setContent($content);
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