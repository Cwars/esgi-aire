<?php

class LoginController
{
    public function loginAction() {
        $v = new View("login");
        // Création de la page esgi-aire.com/login
        $user = new User();

        $v->assign("formConnectionFront", $user->getFormConnectionFront());
    }
}
