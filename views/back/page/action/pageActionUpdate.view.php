<?php
if(!empty($_POST['content'])) {

    $page = new Page();
    $idU = $idUpdate;

    echo $idU;
    $title = $titleUpdate;

    $content = htmlentities($_POST['content']);

    $error = false;
    $listOfErrors = [];

    if(empty($_POST['includeEvent'] )){
        $bolE = 0;
    } else {
        $bolE = (int)$_POST['includeEvent'];
    }

    if(empty($_POST['includeNews'] )){
        $bolN = 0;
    } else {
        $bolN = (int)$_POST['includeNews'];
    }


    if ($error === false) {
        $page->setId($idUpdate);
        $page->setContent($content);
        $page->setTitle($title);
        $page->setIsDeleted(0);

        if($bolE == 1){
            $page->setHasEvent(0);
        } else {
            $page->setHasEvent(1);
        }

        if($bolN == 1){
            $page->setHasNews(0);
        } else {
            $page->setHasNews(1);
        }
        $page->save();
        $_SESSION['added'] = 1;
        header("Location: ".PATH_RELATIVE."back/page/menu/1");
    }
}else{
    $listOfErrors[] = "allRequired";
    $_SESSION["form_error"] = $listOfErrors;
    $_SESSION["form_post"] = $_POST;
    $error = true;
}
if($error==true)
{
    header("Location: ".PATH_RELATIVE."back/page/update");
}

