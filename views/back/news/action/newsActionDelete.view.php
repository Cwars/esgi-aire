<div class="content-wrapper">
<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $news=((new News())->populate(['id' => $idUp]));
    $news->setIsDeleted(1);
    $news->save();

    echo "L'article ".$news->getTitle()." a été supprimé";

}

?>
</div>
