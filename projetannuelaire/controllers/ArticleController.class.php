<?php

/**
 *
 */
class UserController
{

    public function articleAdd($content,$Title) {

        $user = new User();

        $user -> setEmail($content);
        $user -> setPwd($Title);

        $user ->save();
    }

    public function articleDelete(){

    }

    public function articleUpdate(){

    }


}
