<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $com=((new Comment())->populate(['id' => $idUp]));
        $com->setIsDeleted(0);
        $com->save();

        echo "L'utilisateur".$com->getId." a été restauré";
    }
    ?>
</div>
