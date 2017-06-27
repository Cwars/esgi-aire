<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $news=((new News())->populate(['id' => $idUp]));
        $news->setIsDeleted(0);
        $news->save();

        echo "L'article".$news->getTitle." a été restauré";
    }
    ?>
</div>
