<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $mediafile=((new Mediafile())->populate(['id' => $idUp]));
    $mediafile->setIsDeleted(1);
    $mediafile->save();

    echo "Le fichier mutlimédia ".$mediafile->getName()." a été supprimé";

}

?>