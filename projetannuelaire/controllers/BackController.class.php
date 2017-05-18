<?php

/**
 *
 */
class BackController
{

    public function IndexAction($params) {

        $user2 = new User();
        $pseudo = "guillaume";
        $v = new View();
        $v->assign("pseudo", $pseudo);
        $v->assign("form", $user2->getForm());
    }


    public function backhomeAction($params) {
        $v = new View("backhome");
    }

    public function backconnectionAction($params) {
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

        public function backmenuAction($params) {
        $v = new View("backmenu");
    }

        public function backActionConnectionAction($params) {
        $v = new View("backActionConnection");
    }

}
