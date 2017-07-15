<?php

if(isset($idrestore)){

    $idUp = $idrestore[0];
    $mediafile=((new Mediafile())->populate(['id' => $idUp]));
    $mediafile->setIsDeleted(0);
    $mediafile->save();

    echo "Le fichier mutlimédia ".$mediafile->getTitle()." a été restauré";

}

?>

