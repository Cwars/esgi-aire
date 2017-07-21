<?php
/**
 * Created by PhpStorm.
 * User: ilanz
 * Date: 20/07/2017
 * Time: 22:40
 */

class RegisterController
{
    public function registerAction() {
        $user = new User();
        $v = new View('register');
        $v->assign("formRegister", $user->getFormRegisterfront());
    }
}