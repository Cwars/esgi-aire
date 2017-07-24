<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['pwd2']) &&
        isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['pwd2'])) {
        $user = new User();
        $username = htmlentities($_POST['username']);
        $firstname = htmlentities($_POST['firstname']);
        $lastname = htmlentities($_POST['lastname']);
        $email = htmlentities($_POST['email']);
        $pwd = $_POST['pwd'];
        $pwd2 = $_POST['pwd2'];
        $cgu = $_POST['cgu'];
        if(isset($_POST['newsletter']))
            $newsletter = $_POST['newsletter'];
        $error = false;
        $listOfErrors = [];
        if ($cgu == 1){
            if (!$user->populate(['username' => $username])) {
                if (!$user->populate(['email' => $email])) {

                    //Le nom d'utilisateur est déjà utilisé
                    if (strlen($username) < 2) {
                        //Le nom d'utilisateur doit faire au moins 2 caractères
                        $listOfErrors[] = "nbUsername";
                        $error = true;
                    }

                    if ($user->populate(['username' => $username])) {
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

                    if ($cgu != 1) {
                        $listOfErrors[] = "cgu";
                        $error = true;
                    }

                    if ($error === false) {
                        $user->setUsername($username);
                        $user->setStatus("User");
                        $user->setFirstname($firstname);
                        $user->setLastname($lastname);
                        $user->setEmail($email);
                        $user->setPwd($pwd);
                        $user->setIsDeleted(1);

                        $user->save();

                        $_SESSION["added"] = "1";

                        $headercustomer = 'FROM : support@esgi-aire.com';
                        $from = $email;
                        $msg = "
                    Bonjour " . $firstname . ",\n\n
                    Votre inscription à bien été enregistrée, veuillez cliquer sur ce lien pour activer votre compte !\n\n
                    {METTRE LIEN ICI]
                    ";

                        mail($from . '', "Confirmation inscription", $msg, $headercustomer);

                    } else {
                        $_SESSION["form_post"] = $_POST;
                        $error = true;
                    }
                } else {
                    $listOfErrors[] = "18";
                    $error = true;
                }
            } else {
                $listOfErrors[] = "17";
                $error = true;
            }
        }else {
            $listOfErrors[] = "cgu";
        }
    } else {
        $listOfErrors[] = "7";
        $error = true;
    }

}

?>
<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Inscription</h1>
</div>

<section class="un" id="Event">
    <div class="container">
        <h2 class="text-center">Formulaire d'inscription</h2>
        <div class="col1 firstcol">

            <?php
            $this->includeModal("form", $formRegister);
            ?>
        </div>
        <?php
        if( isset($_SESSION["form_error"])){
        ?>
        <div class="info-error">
            <?php
            foreach ($_SESSION["form_error"] as $error) {
                echo $msgError[$error];
                echo "<br>";
            }
            ?>
        </div>
        <?php
        }
        if (isset($_SESSION['added']) && $_SESSION['added'] == 1)
        {
            ?>
            <div class="info-error">
                <?php
                echo $msgSuccess["added_front"];
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<?php
if (!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['pwd2'])) {
    ?>
    <script>
        var sessionData = [
            <?php
            $i = 1;
            foreach ($_POST as $data) {
                    echo "'" . $data . "'";
                if ($i < sizeof($_POST)) {
                    echo ",";
                    $i++;
                }
            } ?>];

        document.getElementsByName("username")[0].value = sessionData[0];
        document.getElementsByName("firstname")[0].value = sessionData[1];
        document.getElementsByName("lastname")[0].value = sessionData[2];
        document.getElementsByName("email")[0].value = sessionData[3];
    </script>

    <?php
}
unset($_SESSION['added']);
unset($_SESSION['form_error']);
