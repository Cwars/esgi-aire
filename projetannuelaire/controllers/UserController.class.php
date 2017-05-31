<?php

/**
 *
 */
class UserController
{

    public function userAdd($email,$pwd,$firstname,$Username,$Lastname,$birthday) {

    }

    public function userDelete(){

    }

    public function userUpdate(){

    }

    public function loginAction()
    {
        if ($_POST) {
            $user = new User();
            $username = $_POST['username'];
            $password = $_POST['pwd'];
            $user = $user->populate(array('username' => $username));

            if (password_verify($password, $user->getPassword())) {
                if (!isset($_SESSION)) session_start();
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user->getId();
                echo "Vous êtes connecté !";
            } else {
                echo "Erreur lors de la connexion";
            }
            $v = new View("backconnection");
            $v->assign("formRegister", $user->getFormRegister());
        }
    }


}
