<div class="content-wrapper">
    <?php
    $user = new User();
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    if($user->populate(['username' => $username])){

        $user = $user->populate(['username' => $username]);

        if (password_verify($password, $user->getPassword())) {

            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user->getId();
            echo "Vous êtes connecté !";

            header("Location: ".$_SERVER["HTTP_REFERER"]);

        } else {
            echo "Mauvais mot de passe";
        }
    }
    else{
        echo "Mauvais Username";
    }
    ?>
</div>
