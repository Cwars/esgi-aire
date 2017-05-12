<?php

/**
 *
 */
class UserController
{

    public function userAdd($email,$pwd,$Firstname,$Username,$Lastname,$birthday) {

        $user = new User();

        $user -> setEmail($email);
        $user -> setPwd($pwd);
        $user -> setFirstname($Firstname);
        $user -> setUsername($Username);
        $user -> setLastname($Lastname);
        $user -> setStatus(1);
        $user -> setAge($birthday);

        $user ->save();
    }

    public function userDelete(){

    }

    public function userUpdate(){

    }



}
