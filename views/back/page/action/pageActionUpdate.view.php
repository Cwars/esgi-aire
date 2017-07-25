<?php
if(!empty($_POST['content'])) {

    $page = new Page();
    $id = $idUpdate;
    $content = trim($_POST['content']);

    $_POST['content'];

    $error = false;
    $listOfErrors = [];

    if ($error === false) {
        $page->setId($id);
        $page->setContent($content);

        $page->save();
    }else{
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
    }
}else{
    $listOfErrors[] = "allRequired";
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