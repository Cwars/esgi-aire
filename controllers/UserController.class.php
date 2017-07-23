<?php

/**
 *
 */

class UserController
{

    public function UserAction() {
        $user =((new User())->populate(['id' => $_SESSION['user_id']]));

        $v = new View("userUpdate");
        $id = $user->getId();
        $username = $user->getUsername();
        $firstname = $user->getfirstname();
        $lastname = $user->getlastname();
        $email = $user->getEmail();

        $v->assign("formUpdate", $user->getFormUpdateFront($id,$username,$firstname,$lastname,$email));
    }

}
