<?php

class RegisterController
{
    public function registerAction() {
        $user = new User();
        $v = new View('register');
        $v->assign("formRegister", $user->getFormRegisterfront());
    }
}