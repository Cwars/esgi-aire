<div class="content-wrapper">
<?php

if(isset($idDelete)){

    $idUp = $idDelete[0];
    $com=((new Comment())->populate(['id' => $idUp]));
    $com->setIsDeleted(1);
    $com->save();

    header("Location: " . PATH_RELATIVE . "back/comment/menu");

}

?>
</div>
