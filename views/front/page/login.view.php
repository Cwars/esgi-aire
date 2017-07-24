<?php
if(isset($_SESSION['user_id']))
{
    header("Location: ".PATH_RELATIVE."home");
}

print_r($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['pwd']) && $_POST['username'] != '' && $_POST['pwd'] != '') {
    print_r("1".$_POST);
/*        $subject = $_POST['username'];
        $subject_pwd = $_POST['pwd'];
        $pattern = '/[][( ){}<>\/+"*%&=?`^\'!$_:;,.]/';
        if (preg_match($pattern, $subject, $matches) == 0 && preg_match($pattern, $subject_pwd, $matches) == 0) {*/
            $user = new User();
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            if ($user->populate(['username' => $username])) { // Si identifiant dans bdd
                print_r(2);
                print_r("1".$_POST);

                $user = $user->populate(['username' => $username]);

                if (password_verify($password, $user->getPassword())) { // Si mdp correspond celui identifiant
                    print_r(3);
                    print_r("1".$_POST);

                    $status = $user->getStatus();
                    if ($status == 'Admin') {print_r(4);
                        session_unset();
                        session_destroy();
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $user->getId();
                        $_SESSION['admin'] = '1';
                    } else
                    {print_r(5);
                        session_unset();
                        session_destroy();
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $user->getId();
                        $_SESSION['admin'] = 0;
                    }
                    header("Location: ".PATH_RELATIVE."home");

                } else
                    $error[] = 13;
            } else
                $error[] = 12;
/*        } else
            $error[] = 15;*/
    } else
        $error[] = 16;
}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>

<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Connexion</h1>
</div>

<section class="un" id="Event">
    <div class="container">
        <h2 class="text-center">Formulaire de connexion</h2>
        <div class="col1 firstcol">

            <?php $this->includeModal("form", $formConnectionFront); ?>
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
        ?>
    </div>
</section>
<?php

