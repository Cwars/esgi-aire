<div class="content-wrapper">
    <?php
    if(isset($idRestore)){
        $idUp = $idRestore[0];

        $user=((new User())->populate(['id' => $idUp]));
        $user->setIsDeleted(0);
        $user->save();

        echo "L'utilisateur ".$user->getUsername()." a été restauré";
        header("Location: " . PATH_RELATIVE . "back/user/menu/1");
    }
    ?>
</div>
