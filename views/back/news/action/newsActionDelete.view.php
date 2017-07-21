<div class="content-wrapper">
<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $news=((new News())->populate(['id' => $idUp]));
    $news->setIsDeleted(1);
    $news->save();

    header("Location: " . PATH_RELATIVE . "back/news/menu");
//    echo "L'article ".$news->getTitle()." a été supprimé";

}

?>
</div>
