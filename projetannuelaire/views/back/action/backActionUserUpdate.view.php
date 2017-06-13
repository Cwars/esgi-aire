<div class="content-wrapper">
    <?php

    if(isset($_POST['btnUpdate'])){
        echo "UPDATE ";
        $idUp = $_POST['btnUpdate'];
        $user = new User();
        $user ->populate(['id' => $idUp]);

        $this->assign("formUpdate", $user->getFormRegister());
        $this->includeModal("form", $formUpdate);
    }

    if(isset($_POST['btnDelete'])){
        $idUp = $_POST['idDelete'];

        $user=((new User())->populate(['id' => $idUp]));
        $user->setIsDeleted(1);
        $user->save();

        echo "L'utilisateur".$user->getUsername." a été supprimé";
    }

    if(isset($_POST['btnRestore'])){
        $idUp = $_POST['idDelete'];

        $user=((new User())->populate(['id' => $idUp]));
        $user->setIsDeleted(0);
        $user->save();

        echo "L'utilisateur".$user->getUsername." a été restauré";
    }

    ?>
</div>
