<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['pwd']) && $_POST['username'] != '' && $_POST['pwd'] != '') {

        /*        $subject = $_POST['username'];
                $subject_pwd = $_POST['pwd'];
                $pattern = '/[][( ){}<>\/+"*%&=?`^\'!$_:;,.]/';
                if (preg_match($pattern, $subject, $matches) == 0 && preg_match($pattern, $subject_pwd, $matches) == 0) {*/
        $user = new User();
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        if ($user->populate(['username' => $username])) { // Si identifiant dans bdd

            $user = $user->populate(['username' => $username]);

            if (password_verify($password, $user->getPwd())) { // Si mdp correspond celui identifiant

                $status = $user->getStatus();
                if ($status == 'Admin') {
                    session_unset();
                    session_destroy();
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user->getId();
                    $_SESSION['admin'] =    1;
                    header("Location: ".PATH_RELATIVE."back/dashboard/menu");
                } else
                {
                    session_unset();
                    session_destroy();
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user->getId();
                    $_SESSION['admin'] = 0;
                    $error[] = "noAuthorization";
                }
            } else
                $error[] = "errorPwd";
        } else
            $error[] = "unknownUser";
        /*        } else
                    $error[] = 15;*/
    } else
        $error[] = "required";
}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>


<div class="login-page">
    <div class="logo">
        <img src="<?php echo PATH_RELATIVE ; ?>assets/back/img/logo.png" class="logo-img">
    </div>
    <div class="form">
        <?php $this->includeModal("form", $formConnection); ?>
    </div>
    <?php
    if(isset($error)) {
        ?>
        <div class="info-error">
            <?php
            foreach ($error as $e) {
                echo $msgError[$e];
            }
            ?>
        </div>
        <?php
    }
    if(isset($_SESSION['error']) && $_SESSION['error'] == 14) {
        ?>
        <div class="info-error">
            <?php
            echo $msgError["noAuthorization"];
            ?>
        </div>
        <?php
        unset($_SESSION['error']);
    }

    if(isset($_SESSION['admin']) && $_SESSION['admin'] != 1 || isset($_SESSION['admin']) && $_SESSION['admin'] != 2) {
        ?>
        <div class="info-blue">
            Vous êtes actuellement connecté en tant qu'utilisateur normal.<br>
            Veuillez vous connecté sur un compte Admin pour naviguer dans votre Back Office.
        </div>
        <?php
        unset($_SESSION['error']);
    }
    ?>
</div>