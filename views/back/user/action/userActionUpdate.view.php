<?php
if( !empty($_POST['username']) && !empty($_POST['firstname'])  && !empty($_POST['lastname']) && isset($_POST["email"])) {

    $user = new User();
    $id = $idUpdate;
    $username = htmlentities($_POST['username']);
    $firstname = htmlentities($_POST['firstname']);
    $lastname = htmlentities($_POST['lastname']);
    $email = htmlentities($_POST['email']);
    $status = htmlentities($_POST['status']);
    $now = date("Y-m-d H:i:s");

    $error = false;
    $listOfErrors = [];

    if (strlen($username) == 1) {
        //Le nom d'utilisateur doit faire au moins 2 caractères
        $listOfErrors[] = "nbUsername";
        $error = true;
    }

    if ($username !== $usernameUpdate && $user->populate(['username' => $username])){
        //Le nom d'utilisateur est déja utilisé
        $listOfErrors[] = "usernameUsed";
        $error = true;
    }

    //Vérifier le nom
    if (strlen($lastname) == 1) {
        //Le nom doit faire au moins 2 caractères
        $listOfErrors[] = "nbLastname";
        $error = true;
    }

    //Vérifier le prénom
    if (strlen($firstname) == 1) {
        //Le prénom doit faire au moins 2 caractères
        $listOfErrors[] = "nbFirstname";
        $error = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email incorrect
        $listOfErrors[] = "errorEmail";
        $error = true;
    }


    if ($error === false) {
        $user->setId($id);
        $user->setUsername($username);
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setPwdUpdate($pwdUpdate);
        $user->setStatus($status);
        $user->setDateUpdated($now);
        $user->setIsDeleted(0);

        $user->save();
        $_SESSION['added'] = 1;
        header("Location: ".PATH_RELATIVE."back/user/menu/1");
    }else{
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
        $error = true;
    }
}else{
    $listOfErrors[] = "allRequired";
    $_SESSION["form_error"] = $listOfErrors;
    $_SESSION["form_post"] = $_POST;
    $error = true;
}

if($error==true)
{
    header("Location: ".PATH_RELATIVE."back/user/add");
}
