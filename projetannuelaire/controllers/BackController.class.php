<?php

/**
 *
 */
class BackController
{

    public function IndexAction($params) {

    }


    public function backhomeAction($params) {
        $v = new View("backhome");
    }

    public function backConnectionAction($params) {
        $user = new User();

        if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $user = $user->populate(array('username' => $username));
        if (password_verify($password, $user->getPassword())) {
            if (!isset($_SESSION)) session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user->getId();
            echo "Vous êtes connecté !";
        }
            else {
            echo "Erreur lors de la connexion";
            }
        }


        $v = new View("backconnection");
        $v->assign("formConnection", $user->getFormConnection());
    
    }

    public function backUserAddAction() {

        $user = new User();

        $v = new View('backUserAdd');
        $v->assign("formRegister", $user->getFormRegister());
    }


    public function backmenuAction($params) {
        $v = new View("backmenu");
    }

    public function backActionConnectionAction($params) {
        $v = new View("backActionConnection");
    }

    public function backActionUserAddAction($params) {
        $v = new View("backActionUserAdd");
    }

}