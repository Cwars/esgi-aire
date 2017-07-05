<?php
if(isset($_SESSION['user_id']))
{
    header("Location: ".PATH_RELATIVE."back/Dashboard/menu");
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username']) && isset($_POST['pwd']) && $_POST['username'] != '' && $_POST['pwd'] != '') {

        $subject = $_POST['username'];
        $subject_pwd = $_POST['pwd'];
        $pattern = '/[][( ){}<>\/+"*%&=?`^\'!$_:;,.]/';
        if (preg_match($pattern, $subject, $matches) == 0 && preg_match($pattern, $subject_pwd, $matches) == 0) {
            $user = new User();
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            if ($user->populate(['username' => $username])) { // SI identifiant dans bdd

                $user = $user->populate(['username' => $username]);

                if (password_verify($password, $user->getPassword())) { // SI mdp correspond celui identifiant

                    $status = $user->getStatus();
                    if ($status = 'admin') {
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $user->getId();
                        $_SESSION['admin'] = 1;
                        header("Location: " . PATH_RELATIVE . "back/Dashboard/menu");
                    } else
                        $error[] = 14;
                } else
                    $error[] = 13;
            } else
                $error[] = 12;
        } else
            $error[] = 15;
    } else
        $error[] = 16;
}
?>


<div class="login-page">
    <div class="logo">
        <img src="<?php echo PATH_RELATIVE ; ?>/assets/back/img/logo.png" class="logo-img">
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
    ?>
</div>