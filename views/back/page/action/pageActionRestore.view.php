<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $page=((new Page())->populate(['id' => $idUp]));
        $page->setIsDeleted(0);
        $page->save();

        echo "La page ".$page->getTitle()." a été restauré";
    }
    ?>
</div>
