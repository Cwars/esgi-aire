<?php

class LoginController
{
    public function userAction() {
        $v = new View("login");
    }

    public function userConfirmationAction() {
        $v = new View("userConfirmation");
    }
}