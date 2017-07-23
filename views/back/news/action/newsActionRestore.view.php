<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $news =((new News())->populate(['id' => $idUp]));
        $news->setIsDeleted(0);
        $news->save();

        echo "L'utilisateur".$news->getTitle." a été restauré";
        header("Location: " . PATH_RELATIVE . "back/news/menu");
    }
    ?>
</div>
