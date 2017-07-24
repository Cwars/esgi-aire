<?php

if(isset($idRestore)){

    $idUp = $idRestore[0];
    $mediafile=((new Mediafile())->populate(['id' => $idUp]));
    $mediafile->setIsDeleted(0);
    $mediafile->save();

    echo "Le fichier mutlimédia ".$mediafile->getTitle()." a été restauré";

    header("Location: " . PATH_RELATIVE . "back/mediafile/menu/1");

}

?>

