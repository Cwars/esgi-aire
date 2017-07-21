<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $event=((new Event())->populate(['id' => $idUp]));
        $event->setIsDeleted(0);
        $event->save();

        echo "L'utilisateur".$user->getUsername." a été restauré";
    }
    ?>
</div>
