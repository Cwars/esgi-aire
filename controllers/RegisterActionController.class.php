<?php

class RegisterActionController
{
    public function registerActionAction() {
        $user = new User();
        $v = new View('registerAction');
    }
}