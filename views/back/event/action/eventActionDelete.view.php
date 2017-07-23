<div class="content-wrapper">
<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $event=((new Event())->populate(['id' => $idUp]));
    $event->setIsDeleted(1);
    $event->save();

    header("Location: " . PATH_RELATIVE . "back/event/menu");
//    echo "L'utilisateur ".$user->getUsername()." a été supprimé";

}

?>
</div>
