<?php

class UserController
{
    public function userAction($params) {
        $user =((new User())->populate(['id' => $params[0]]));

        if($user->getStatus() == "User"){
            $v = new View("user");
            $id = $params[0];
            $username = $user->getUsername();
            $firstname = $user->getfirstname();
            $lastname = $user->getlastname();
            $email = $user->getEmail();

            $v->assign("formUpdate", $user->getFormUpdateFront($id,$username,$firstname,$lastname,$email));
        } else{
            $v = new View("page404");
        }

    }

}