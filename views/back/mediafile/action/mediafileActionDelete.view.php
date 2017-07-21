<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $mediafile=((new Mediafile())->populate(['id' => $idUp]));
    $mediafile->setIsDeleted(1);
    $mediafile->save();

    header("Location: " . PATH_RELATIVE . "back/mediafile/menu");
    echo "Le fichier mutlimédia ".$mediafile->getTitle()." a été supprimé";

}

?>
