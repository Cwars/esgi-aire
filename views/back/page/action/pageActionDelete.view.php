<div class="content-wrapper">
    <?php
    if(isset($idDelete)){
        $idUp = $idDelete[0];

        $page=((new Page())->populate(['id' => $idUp]));
        $page->setIsDeleted(1);
        $page->save();

        echo "La page ".$page->getTitle()." a été restauré";
    }
    ?>
</div>
