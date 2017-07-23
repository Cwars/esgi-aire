<?php

class LoginController
{
    public function loginAction() {
        $v = new View("login");
        $user = new User();

        $v->assign("formConnectionFront", $user->getFormConnectionFront());
    }
}
