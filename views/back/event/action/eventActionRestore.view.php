<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $event=((new Event())->populate(['id' => $idUp]));
        $event->setIsDeleted(0);
        $event->save();

        echo "L'utilisateur".$event->getTitle." a été restauré";
        header("Location: " . PATH_RELATIVE . "back/event/menu");
    }
    ?>
</div>
