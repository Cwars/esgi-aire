<?php
if( !empty($_POST['username']) && !empty($_POST['firstname'])  && !empty($_POST['lastname']) && isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["pwd2"])) {
    $user = new User();
    $username = trim($_POST['username']);
    $statut = trim($_POST['statut']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    //Birthday

    $error = false;
    $listOfErrors = [];

    //Le nom d'utilisateur est déjà utilisé
    if (strlen($username) == 1) {
        //Le nom d'utilisateur doit faire au moins 2 caractères
        $listOfErrors[] = "nbUsername";
        $error = true;
    }

    if ($user->populate(['username' => $username])){
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

    if (strlen($pwd) < 8 || strlen($pwd) > 12) {
        //Le mot de passe doit faire entre 8 et 12 caractères
        $listOfErrors[] = "nbPwd";
        $error = true;
    }

    if ($pwd != $pwd2) {
        //Le mot de passe de confirmation ne correspond pas
        $listOfErrors[] = "pw1/pw2";
        $error = true;
    }

    if ($error === false) {
        $user->setUsername($username);
        $user->setStatus($statut);
        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setPwd($pwd);
        $user->setStatus("Admin");
        $user->setIsDeleted(0);
        // $user -> setBirthday($username);

        $user->save();
    }else{
        $_SESSION["form_error"] = $listOfErrors;
        $_SESSION["form_post"] = $_POST;
    }
}else{
    $listOfErrors[] = "7";
    $_SESSION["form_error"] = $listOfErrors;
    $_SESSION["form_post"] = $_POST;
}

echo "<div class=\"content-wrapper\">";
if( isset($_SESSION["form_error"]) ){
    foreach ($_SESSION["form_error"] as $error) {
        echo "<li>".$msgError[$error];
    }
}
unset($_SESSION["form_post"]);
unset($_SESSION["form_error"]);
echo "</div>";