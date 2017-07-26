<?php

class PwdForgotController
{

    public function PwdForgotAction() {
        $v = new View("PwdForgot");

        $user = new User();

        // Création de la page esgi-aire.com/PwdForgot

        $v->assign("formPwd", $user->getFormPwdForgot());
    }


}
