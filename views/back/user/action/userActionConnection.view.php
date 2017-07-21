<div class="content-wrapper">
    <?php

    if(isset($_SESSION['user_id']))
    {
        header("Location: ".PATH_RELATIVE."back/dashboard/menu");
    }

    if (isset($_POST['username']) && isset($_POST['pwd'])) {

        $user = new User();
        $username = $_POST['username'];
        $password = $_POST['pwd'];

        if ($user->populate(['username' => $username])) { // SI identifiant dans bdd

            $user = $user->populate(['username' => $username]);

            if (password_verify($password, $user->getPassword())) { // SI mdp correspond celui identifiant

                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user->getId();
                header("Location: " . PATH_RELATIVE . "back/dashboard/menu");
            } else {
                echo "Mauvais mot de passe";
            }
        } else {
            echo "Mauvais Username";
        }
    }
    ?>

</div>
